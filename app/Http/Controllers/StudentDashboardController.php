<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Crypt;

class StudentDashboardController extends Controller
{
    public function index(Request $request)
    {
        $userId = $request->session()->get('user')['userOut']['userId'];
        $courses_enrolled = Http::get('https://eniola-service.herokuapp.com/api/v_1/students/enrolls/users/' . $userId);

        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');
        for ($i = 0; $i < count($courses->collect()); $i++) {
            if ($courses->collect()[$i]["visible"] == true) {
                $courses_visibles[] = $courses->collect()[$i];
            }
        }
        //dd($courses_enrolled->collect());
        return view('userDash.dashstudent', ['courses_enrolled' => $courses_enrolled->collect(), 'courses' => $courses_visibles, 'titre' => 'Mon tableau de bord']);
    }

    public function profile()
    {
        return view('userDash.profil', ['titre' => 'Mon tableau de bord-Profile']);
    }

    /*Parametre */
    public function parametre()
    {
        return view('userDash.parametres', ['titre' => 'Mon tableau de bord-Parametres']);
    }

    public function change_profile(Request $request)
    {

        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'sexe' => ['required', 'in:FEMALE,MALE'],
            'birth' => ['required'],
        ]);

        $data = $request->all();
        $lastname = $data['nom'];
        $firstname = $data['prenom'];
        $sexe = $data['sexe'];
        $birthday = $data['birth'];
        $userId = $request->session()->get('user')['userOut']['userId'];
        $email = $request->session()->get('user')['userOut']['email'];

        $response = Http::put('https://eniola-service.herokuapp.com/api/v_1/commons/users', [
            'email' => $email,
            'lastname' => $lastname,
            'firstname' => $firstname,
            'birthday' => $birthday,
            'gender' => $sexe,
            'userId' => $userId,
        ]);


        if ($response->json()['message'] == "profile_updated") {
            return redirect()->route('app_dash_student')->with('success', 'Profil modifié avec succes!');
        } else {
            return back()->with('error', 'Echec');
        }
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

        $response = Http::put('https://eniola-service.herokuapp.com/api/v_1/commons/modified-password', [
            'email' => $email,
            'newPassword' => $newPassword,
            'oldPassword' => $oldPassword,
        ]);

        if ($response->json()['message'] == "password_changed") {
            setcookie('login_email', '', time() - 60 * 60 * 24 * 365, '/');
            setcookie('login_password', '', time() - 60 * 60 * 24 * 365, '/');
            return redirect()->route('app_dash_student')->with('success', 'Mot de passe changé avec succes!');
        } else {
            return back()->with('error', 'Echec');
        }
    }



    public function statistique()
    {
        return view('userDash.stat', ['titre' => 'Mon tableau de bord-Statistique']);
    }
}
