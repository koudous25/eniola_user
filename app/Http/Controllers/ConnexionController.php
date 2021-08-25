<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Crypt;

class ConnexionController extends Controller
{
    public function traitement(Request $request)
    {
        request()->validate([
            'login' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $data = $request->all();
        $login = $data['login'];
        $password = $data['password'];


        if (isset($_COOKIE['login_password'])) {
            $password_old = Crypt::decrypt($_COOKIE['login_password']);
            if ($password !== secret($_COOKIE['login_password'])) {
                $password = $password;
            } else {
                $password = $password_old;
            }
        }


        $client = new Client();
        $response = $client->request(
            'POST',
            'https://eniola-service.herokuapp.com/api/v_1/commons/authentication',
            [
                'json' => [
                    'login' => $login,
                    'password' => $password,
                ]
            ]
        );
        setcookie('login_email', '', time() - 60 * 60 * 24 * 365, '/');
        setcookie('login_password', '', time() - 60 * 60 * 24 * 365, '/');

        $stringBody = (string) $response->getBody()->getContents();
        if ($stringBody == "") {
            return back()->with('error', 'Oups! Revoyez les entrées');
        } else {

            if ($request->remember == null) {
            } else {
                setcookie('login_email', $request->login, time() + 60 * 60 * 24 * 365, '/');
                setcookie('login_password', Crypt::encrypt($request->password), time() + 60 * 60 * 24 * 365, '/');
            }

            $user = json_decode($stringBody, true);
            $token = $user['token'];
            $userOut = $user['userOut'];
            $request->session()->put('user', $user);
            if ($userOut['role'] === "ETUDIANT") {
                return redirect()->route('app_dash_student')->with('success', 'Connexion réussie!');
            } elseif ($userOut['role'] === "RESPONSABLE") {
                return redirect()->route('app_dash_mentor')->with('success', 'Connexion réussie!');
            } elseif ($userOut['role'] === "ORGANISATION") {
                return redirect()->route('app_dash_mentor')->with('success', 'Connexion réussie!');
            }
        }
    }
}
