<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class IndexAPIController extends Controller
{
    public function index()
    {
        $categories = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/categories');
        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');

        return view('layouts.index',[
            'Categories' => $categories->collect(),
            'Courses' => $courses->collect()

        ]);
    }

    public function showAllCourses()
    {
        $categories = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/categories');
        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');
        
        return view('layouts.courses',[
            'Categories' => $categories->collect(),
            'Courses' => $courses->collect()

        ]);
    }
}
