<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\IndexAPIController;
use Illuminate\Http\Request;

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

Route::get('/','App\Http\Controllers\IndexAPIController@index',['titre' => 'Accueil'])->name('app_home');

Route::get('about', function () {
    return view('layouts.about', ['titre' => 'A propos']);
})->name('app_about');

Route::get('contact', function () {
    return view('layouts.contact', ['titre' => 'Nous contacter']);
});

Route::get('courses','App\Http\Controllers\IndexAPIController@showAllCourses')->name('app_courses');

Route::get('courses-details', function () {
    return view('layouts.courses-details', ['titre' => 'Présentation']);
})->name('app_courses_details');


Route::get('after-enroll', function () {
    return view('layouts.after-enroll', ['titre' => 'Cours']);
})->name('app_after_enroll');

// Route::get('courses', [CoursesController::class, 'allcourses']);


/*Login route */
Route::get('login', function () {
    return view('auth.login', ['titre' => 'Connexion']);
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
    return view('auth.register', ['titre' => 'Inscription']);
})->name('app_register');

Route::post('register', [InscriptionController::class, 'traitement'])->name('app_register_traitement');
/*Register route end */


/*StudentDashboard */

Route::get('dashboard_student', [StudentDashboardController::class, 'index'])->name('app_dash_student');


Route::get('dashboard_student/profile', [StudentDashboardController::class, 'profile'])->name('app_dash_student_profile');

Route::get('dashboard_student/statistique', [StudentDashboardController::class, 'statistique'])->name('app_dash_student_statistique');

Route::get('dashboard_student/change_profile', [StudentDashboardController::class, 'change_profile'])->name('app_dash_student_change_profile');

Route::get('dashboard_student/parametre', [StudentDashboardController::class, 'parametre'])->name('app_dash_student_parametre');

Route::get('dashboard_student/change_password', [StudentDashboardController::class, 'change_password'])->name('app_dash_student_change_password');



Route::get('dashboard-mentor', function () {
    return view('userDash.dashboard-mentor', ['titre' => 'Mon tableau de bord']);
})->name('app_dash_mentor');
