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

    
    public function showOneCourse(Request $request)
    {
        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');
        $courses = $courses->collect();
        $titre = $request -> title;

        foreach( $courses as $cours ){
            if ($cours['title'] = $titre) {
                $course = $cours;
            }
        }
        // dd($course);
        
        return view('layouts.courses-details',[
            'Course' => $course
        ]);
    }

    public function showCourse(Request $request)
    {
        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');
        $courses = $courses->collect();
        $titre = $request -> title;

        foreach( $courses as $cours ){
            if ($cours['title'] = $titre) {
                $course = $cours;
            }
        }
        
        return view('layouts.after-enroll',[
            'Course' => $course,
            'Paragraphs' => $course['paragraphs']->collect()
        ]);
    }
}
