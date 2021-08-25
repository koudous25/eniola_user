<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\MentorDashboardController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\IndexAPIController;
use Illuminate\Http\Request;
use App\Http\Middleware\SDashAuth;
use App\Http\Middleware\MDashAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/

Route::get('/','App\Http\Controllers\IndexAPIController@index')->name('app_home');

Route::get('about', function () {
    return view('layouts.about');
})->name('app_about');

Route::get('contact', function () {
    return view('layouts.contact');
})->name('app_contact');

Route::get('courses','App\Http\Controllers\IndexAPIController@showAllCourses')->name('app_courses');

Route::get('course-detail/{id}','App\Http\Controllers\IndexAPIController@showOneCourse')->name('app_course_detail')->where('id', '[0-9]+');

Route::get('after-enroll/{id}','App\Http\Controllers\IndexAPIController@showCourse')->name('app_after_enroll')->where('id', '[0-9]+');


// Route::get('course_detail/{id}', 'App\Http\Controllers\IndexAPIController@courseDetail')->name('app_course_detail')->where('id', '[0-9]+');


Route::get('enroll/{id}', 'App\Http\Controllers\IndexAPIController@enroll')->name('app_enroll')->where('id', '[0-9]+');

// Route::get('after_enroll/{id}', 'App\Http\Controllers\IndexAPIController@after_enroll')->name('app_after_enroll')->where('id', '[0-9]+');


/*Login route */
Route::get('login', function () {
    return view('auth.login');
})->name('app_login')->middleware('user');

Route::post('login', [ConnexionController::class, 'traitement'])->name('app_login_traitement');
/*Login route end */

Route::get('logout', function (Request $request) {
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('app_home')->with('success', 'Deconnexion avec succès!');
})->name('app_logout')->middleware('logout');

/*Register route */
Route::get('register', function () {
    return view('auth.register');
})->name('app_register')->middleware('user');

Route::get('dashboard_mentor/register', function () {
    return view('auth.register', ['titre' => 'Inscription', 'from_mentor'=>true]);
})->name('app_register_mentor');

Route::post('register', [InscriptionController::class, 'traitement'])->name('app_register_traitement');
/*Register route end */


/**Dashboard */

Route::middleware([SDashAuth::class])->group(function () {
    /*StudentDashboard */
    Route::get('dashboard_student', [StudentDashboardController::class, 'index'])->name('app_dash_student');

    Route::get('dashboard_student/profile', [StudentDashboardController::class, 'profile'])->name('app_dash_student_profile');

    Route::get('dashboard_student/statistique', [StudentDashboardController::class, 'statistique'])->name('app_dash_student_statistique');

    Route::get('dashboard_student/change_profile', [StudentDashboardController::class, 'change_profile'])->name('app_dash_student_change_profile');

    Route::get('dashboard_student/parametre', [StudentDashboardController::class, 'parametre'])->name('app_dash_student_parametre');

    Route::get('dashboard_student/change_password', [StudentDashboardController::class, 'change_password_view'])->name('app_dash_student_change_password');
    Route::post('dashboard_student/change_password', [StudentDashboardController::class, 'change_password'])->name('app_dash_student_change_password_traitement');
});


/*Dash Mentor*/
Route::middleware([MDashAuth::class])->group(function () {
    Route::get('dashboard_mentor', [MentorDashboardController::class, 'index'])->name('app_dash_mentor');

    Route::get('dashboard_mentor/profile', [MentorDashboardController::class, 'profile'])->name('app_dash_mentor_profile');

    Route::get('dashboard_mentor/statistique', [MentorDashboardController::class, 'statistique'])->name('app_dash_mentor_statistique');

    Route::get('dashboard_mentor/cours_recommande', [MentorDashboardController::class, 'cours_recommande'])->name('app_dash_mentor_cours_recommande');

    Route::get('dashboard_mentor/recommandation', [MentorDashboardController::class, 'recommandation'])->name('app_dash_mentor_recommandation');

    Route::post('dashboard_mentor/recommandation', [MentorDashboardController::class, 'recommandation_traitement'])->name('app_dash_mentor_recommandation_traitement');

    Route::get('dashboard_mentor/add_student', [MentorDashboardController::class, 'add_student'])->name('app_dash_mentor_add_student');

    Route::post('dashboard_mentor/add_student', [MentorDashboardController::class, 'add_student_traitement'])->name('app_dash_mentor_add_student_traitement');


    Route::get('dashboard_mentor/parametre', [MentorDashboardController::class, 'parametre'])->name('app_dash_mentor_parametre');
    Route::post('dashboard_mentor/change_password', [MentorDashboardController::class, 'change_password'])->name('app_dash_mentor_change_password');
    Route::post('dashboard_mentor/change_profile', [MentorDashboardController::class, 'change_profile'])->name('app_dash_mentor_change_profile');
});