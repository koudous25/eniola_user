<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CoursesController extends Controller
{
    public function allcourses()
    {
        $client = new Client();

        $r = $client->request('GET', 'https://eniola-service.herokuapp.com/api/v_1/admin/categories');
        $cat = $r->getBody()->getContents();
        //$cat = (string) $r->getBody()->getContents();
        $categories = json_decode($cat, true);
    }
}
