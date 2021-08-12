<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index()
    {
        return view('userDash.dashboard-student', ['titre' => 'Mon tableau de bord']);
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
    public function change_password()
    {
        return view('userDash.change-password', ['titre' => 'Mon tableau de bord-Changer-password']);
    }



    public function statistique()
    {
        return view('userDash.statistique', ['titre' => 'Mon tableau de bord-Statistique']);
    }
}
