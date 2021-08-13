<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');
        return view('userDash.dashboard-student', ['courses' => $courses->collect(), 'titre' => 'Mon tableau de bord']);
    }

    public function profile()
    {
        return view('userDash.profile', ['titre' => 'Mon tableau de bord-Profile']);
    }

    /*Parametre */
    public function parametre()
    {
        return view('userDash.change-profile', ['titre' => 'Mon tableau de bord-Changer-profile']);
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

    public function change_password_view()
    {
        return view('userDash.change-password', ['titre' => 'Mon tableau de bord-Changer-password']);
    }



    public function statistique()
    {
        return view('userDash.statistique', ['titre' => 'Mon tableau de bord-Statistique']);
    }
}
