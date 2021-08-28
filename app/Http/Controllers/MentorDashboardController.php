<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class MentorDashboardController extends Controller
{
    public function index(Request $request)
    {
        /**Recupérer le id du mentor */
        $user = $request->session()->get('user');        
        $userOut = $user['userOut'];
        $user_id =$userOut['userId'];

        $response = Http::get('https://eniola-service.herokuapp.com/api/v_1/supervisors/'.$user_id.'/students');
        return view('userDash.dashmentor', ['titre' => 'Mon tableau de bord', 'students'=>$response->collect()]);
    }

    public function profile()
    {
        return view('userDash.profilm', ['titre' => 'Mon tableau de bord-Profile']);
    }

    /*Parametre */
    public function parametre()
    {
        return view('userDash.parametresm', ['titre' => 'Mon tableau de bord-Parametres']);
    }

    public function change_profile()
    {

        return view('userDash.change-profile', ['titre' => 'Mon tableau de bord-Changer-profile']);
    }
    public function change_password(Request $request)
    {

        request()->validate([
            'email' => ['required', 'email'],
            'newPassword' => ['required', 'confirmed', 'min:6'],
            'oldPassword' => ['required'],
            'newPassword_confirmation' => ['required'],
        ]);
        $data = $request->all();
        $email = $data['email'];
        $oldPassword = $data['oldPassword'];
        $newPassword = $data['newPassword'];
        $client = new Client();
        $response = $client->request(
            'PUT',
            'https://eniola-service.herokuapp.com/api/v_1/commons/modified-password',
            [
                'json' => [
                    'email' => $email,
                    'oldPassword' => $oldPassword,
                    'newPassword' => $newPassword,
                ]
            ]
        );

        $stringBody = (string) $response->getBody()->getContents();
        dd($stringBody);
        if ($stringBody === "") {
            return redirect()->route('app_dash_student')->with('success', 'Mot de passe changé avec succes!');
        } else {
            return back()->with('error', 'Echec');
        }
    }
    public function statistique()
    {
        return view('userDash.statm', ['titre' => 'Mon tableau de bord-Statistique']);
    }

    public function recommandation(Request $request, $id)
    {   $user = $request->session()->get('user');        
        $userOut = $user['userOut'];
        $user_id =$userOut['userId'];

        $response = Http::get('https://eniola-service.herokuapp.com/api/v_1/supervisors/'.$user_id.'/enrolls');
        $courses=array();
        $student=array();
        foreach ($response->collect() as  $enroll) { 
            //var_dump($enroll);
            if($enroll['student']['userId']==$id){ 
                array_push($courses, $enroll['course']);                
            }           
        }    
        
        $response = Http::get('https://eniola-service.herokuapp.com/api/v_1/commons/users/'.$id);
        $student=$response->collect();   
        return view('userDash.recommandation', ['titre' => 'Mon tableau de bord-Cours', 
            'Courses' => $courses, 'student'=>$student,]);
    }


    public function cours_recommande()
    {
        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');

        return view('userDash.cours_recommande', ['titre' => 'Mon tableau de bord-Recommander un cours',
        'Courses' => $courses->collect(),]);
    }



    public function recommandation_traitement()
    {
    }

    public function add_student()
    {
        return view('userDash.add_student', ['titre' => 'Mon tableau de bord-Ajouter un élève']);
    }

    public function add_student_traitement()
    {
    }
}
