<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Response;

class ConnexionController extends Controller
{
    public function traitement(Request $request)
    {
        $data = $request->all();
        request()->validate([
            'login' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $login = $data['login'];
        $password = $data['password'];
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

        $stringBody = (string) $response->getBody()->getContents();
        if ($stringBody === "") {
            return back()->with('error', 'Oups! Revoyez les entrées');
        } else {
            //dd($stringBody);
            $user = json_decode($stringBody, true);
            $token = $user['token'];
            $userOut = $user['userOut'];
            $request->session()->put('user', $user);
            if ($userOut['role'] == "ETUDIANT") {
                return redirect()->route('app_dash_student')->with('success', 'Connexion réussie!');
            } elseif ($userOut['role'] === "RESPONSABLE") {
                return redirect()->route('app_dash_student')->with('success', 'Connexion réussie!');
            } elseif ($userOut['role'] === "ORGANISATION") {
                return redirect()->route('app_dash_student')->with('success', 'Connexion réussie!');
            } elseif ($userOut['role'] === "ADMIN") {
                return redirect()->route('app_dash_student')->with('success', 'Connexion réussie!');
            }
        }
    }
}
