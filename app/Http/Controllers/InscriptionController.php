<?php

namespace App\Http\Controllers;


use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Response;


class InscriptionController extends Controller
{
    public function traitement(Request $request)
    {

        request()->validate([
            'nom' => ['required', 'max:20'],
            'prenom' => ['required', 'max:20'],
            'email' => ['required', 'email'],
            'select' => ['required'],
            'password' => ['required', 'confirmed', 'min:6'],
            'password_confirmation' => ['required'],
            'sexe' => ['required', 'in:FEMALE,MALE'],
            'birth' => ['required'],
        ]);
        $data = $request->all();
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $email = $data['email'];
        $sexe = $data['sexe'];
        $birth = $data['birth'];
        $role = $data['select'];
        $password = $data['password'];

        /*$response = Http::post('https://eniola-service.herokuapp.com/api/v_1/commons/inscription', [
            'firstname' => $prenom,
            'lastname' => $nom,
            'birthday' => $birth,
            'email' => $email,
            'gender' => $sexe,
            'role' => $role,
            'password' => $password
        ]);
        dd($response);*/

        $client = new Client();
        $response = $client->request(
            'POST',
            'https://eniola-service.herokuapp.com/api/v_1/commons/inscription',
            [
                'json' => [
                    'firstname' => $prenom,
                    'lastname' => $nom,
                    'birthday' => $birth,
                    'email' => $email,
                    'gender' => $sexe,
                    'role' => $role,
                    'password' => $password
                ]
            ]
        );

        $stringBody = (string) $response->getBody()->getContents();
        if ($stringBody === "") {
            return back()->with('error', "Oups!Echec de l'inscription");
        } else {
            $login = $data['email'];
            $password = $data['password'];
            $client = new Client();
            $r = $client->request(
                'POST',
                'https://eniola-service.herokuapp.com/api/v_1/commons/authentication',
                [
                    'json' => [
                        'login' => $login,
                        'password' => $password,
                    ]
                ]
            );
            $strBody = (string)$r->getBody()->getContents();
            if ($strBody === "") {
                dd($strBody);
                return back()->with('error', 'La connexion a échouée');
            } else {
                $user = json_decode($strBody, true);
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
}
