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
        $data = $request->all();

        if(isset($data['from_mentor'])){
            return $this->treatment_anormal($request);
        }else{
            return $this->treatment_normal($request);
        }
         
    }

    private function treatment_anormal(Request $request){
        

        request()->validate([
            'nom' => ['required', 'max:20'],
            'prenom' => ['required', 'max:20'], 
            'select' => ['required', 'in:ETUDIANT,RESPONSABLE,ORGANISATION'], 
            'sexe' => ['required', 'in:FEMALE,MALE'],
            'birth' => ['required'],
        ]);
        $data = $request->all();
        $nom = $data['nom'];
        $prenom = $data['prenom']; 
        $sexe = $data['sexe'];
        $birth = $data['birth'];
        $role = $data['select']; 

        /**Recupérer le id du mentor */
        $user = $request->session()->get('user');        
        $userOut = $user['userOut'];
        $user_id =$userOut['userId'];

        /**Envoi de la req */
        $response = Http::post(
            'https://eniola-service.herokuapp.com/api/v_1/supervisors/students',
            [
                'firstname' => $prenom,
                'lastname' => $nom,
                'birthday' => $birth, 
                'gender' => $sexe , 
                'parentId' => $user_id,
            ]

        );
 
        $answers= $response->json();

        if (!isset($answers['email'])) { 
            return back()->with('error', "Oups! Echec de l'inscription");
        } else {
 
            $login = $answers['email'];
            $password = $answers['password']; 
            
            return redirect()->route('app_dash_mentor')->with('success', 'Inscription d\'étudiant réussie ! Voici les identifiants de l\'étudiant: Email: '.$login.' Mot de passe: '.$password);
        }
    }

    private function treatment_normal(Request $request){
        

        request()->validate([
            'nom' => ['required', 'max:20'],
            'prenom' => ['required', 'max:20'],
            'email' => ['required', 'email'],
            'select' => ['required', 'in:ETUDIANT,RESPONSABLE,ORGANISATION'],
            'password' => ['required', 'confirmed', 'min:6', 'max:25'],
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


        $response = Http::post(
            'https://eniola-service.herokuapp.com/api/v_1/commons/inscription',
            [
                'firstname' => $prenom,
                'lastname' => $nom,
                'birthday' => $birth,
                'email' => $email,
                'gender' => $sexe,
                'role' => $role,
                'password' => $password
            ]

        );
        if ($response->json()['message'] == "") {
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


            /*$r = Http::post(
                'https://eniola-service.herokuapp.com/api/v_1/commons/authentication',
                [
                    'login' => $login,
                    'password' => $password
                ]

            );*/


            if ($strBody == "") {
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
                }
            }
        }
    }
}
