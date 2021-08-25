<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class IndexAPIController extends Controller
{
    public function index()
    {
        $categories = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/categories');
        //d(($categories->collect())[0]);
        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');
        for ($i = 0; $i < count($courses->collect()); $i++) {
            if ($courses->collect()[$i]["visible"] == true) {
                $courses_visibles[] = $courses->collect()[$i];
            }
        }

        /*$response =
            Http::post('http://example.com/users', [
                'name' => 'Miller Juma',
                'role' => 'Laravel Contributor',
            ]);*/

        return view('layouts.index', [
            'Categories' => $categories->collect(),
            'Courses' => $courses_visibles,
        ]);
    }

    public function showAllCourses()
    {
        $categories = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/categories');
        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');
        
        return view('layouts.courses',[
            'Categories' => $categories->collect(),
            'Courses' => $courses->collect(),
        ]);
    }

    
    public function showOneCourse(Request $request)
    {
        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');
        $courses = $courses->collect();
        $id = $request -> id;

        foreach( $courses as $cours ){
            if ($cours['id'] = $id) {
                $course = $cours;
                continue;
            }
        }
        
        if ($course == []) {
            return redirect()->back()->with('error', "Echec de l'affichage du cours");
        } else {
            return view('layouts.course-detail',[
                'Course' => $course,
            ]);
        }
        
        
    }

    public function enroll(Request $request, $id)
    {
        if (!($request->session()->has('user'))) {
            return redirect()->back()->with('error', "Veuillez vous connecter avant de vous inscrire au cours. ");
        } else {
            if ($request->session()->get('user')['userOut']['role'] === "ETUDIANT") {
                $studentId = $request->session()->get('user')['userOut']['userId'];
                $response = Http::get('https://eniola-service.herokuapp.com/api/v_1/students/enrolls/users/' . $studentId);
                $previous_enrolled = $response->collect();

                $result = false;
                foreach ($previous_enrolled as $enrolled) {
                    if ($enrolled['course']['id'] == $id) {
                        $result = true;
                        break;
                    }
                }
                if ($result == true) {
                    return redirect()->route('app_after_enroll', ['id' => $id])->with('info', "Vous êtes déjà inscrit à ce cours");
                } else {
                    $response = Http::post('https://eniola-service.herokuapp.com/api/v_1/students/enrolls', [
                        'courseId' => $id,
                        'studentId' => $request->session()->get('user')['userOut']['userId']
                    ]);
                    if ($response->json()['message'] == 'course_enrolled') {
                        return redirect()->route('app_after_enroll', ['id' => $id])->with('success', "Inscription au cours avec succes");
                    } else {
                        return redirect()->back()->with('error', "Echec de l'inscription au cours");
                    }
                }
            } else {
                return redirect()->back()->with('error', "Seuls les inscrits en tant qu'étudiant peuvent s'inscrire au cours!");
            }
        }
    }

    public function showCourse(Request $request)
    {
        $courses = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/courses');
        $quizs = Http::get('https://eniola-service.herokuapp.com/api/v_1/admin/quiz');
        $quizs = $quizs->collect();
        $courses = $courses->collect();
        $id = $request -> id;

        foreach( $courses as $cours ){
            if ($cours['id'] = $id) {
                $course = $cours;
                continue;
            }
        }
        $quizf = [];
        foreach( $quizs as $quiz ){
            if ($quiz['course']['id'] = $id) {
                $quizf = $quiz;
                continue;
            }
        }

        $Para = $course['paragraphs'];
        // dd($Para);
        return view('layouts.after-enroll',[
            'Course' => $course,
            'Paragraphs' => $Para,
            'Quiz' => $quizf,
            'Question' => $quizf
        ]);
    }
}
