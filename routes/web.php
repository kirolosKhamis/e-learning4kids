<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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




// Route::get('/','App\Http\Controllers\projectcontroller@index');
// Route::get('/student','App\Http\Controllers\projectcontroller@index2');

// 1
Route::get('/child', function () {
    return view('Frontend.childview');
})->name("child");

// 2
Route::get('/create', function () {
    return view('Frontend.Creataccount');
})->name("child");

// 3
Route::get('/createClassroom', function () {
    return view('Frontend.createClassroom');
})->name("create_class");

// 4

// Route::get('/', function () {
//     return view('Frontend.home');
// })->name("home");
// Route::get('/home', function () {
//     return view('Frontend.home');
// })->name("home");
// Route::get('/home', 'HomeController@index')->name("home")->middleware("verified");
Auth::routes(['verify'=>true]);
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware("verified");



// 5
Route::get('/studentLogin', function () {
    return view('Frontend.studentLogin');
});
Route::get('/newLogin', function () {
    return view('Frontend.newLogin');
});
Route::get('/newRegister', function () {
    return view('Frontend.newRegister');
});
Route::get('/newForget', function () {
    return view('Frontend.newForgetPass');
});

// Route::get('/studentR', function () {
//     return view('Auth.studentR');
// });

// 6   master "it doesn't have to be opened"

// 7
Route::get('/materials', function () {
    return view('Frontend.materials');
})->name("materials");

// 8
Route::get('/result', function () {
    return view('Frontend.questionairResult');
})->name("");

// 9
Route::get('/questionnaire', function () {
    return view('Frontend.questionnaire');
})->name("questionnaire");

// 10
Route::get('/register', function () {
    return view('Frontend.registerAs');
})->name("");

// 11
Route::get('/studentClassroom', function () {
    return view('Frontend.student-classroom');
})->name("");

// 12
Route::get('/studentJoin', function () {
    return view('Frontend.student-join-classroom');
})->name("");

// 13
Route::get('/student', function () {
    return view('Frontend.student');
})->name('student');

// 14
Route::get('/teacherClassroom', function () {
    return view('Frontend.teacher-classroom');
})->name("");

// 15
Route::get('/teacher', function () {
    return view('Frontend.teacher');
})->name("teacher");

// 16
Route::get('/teacherRegister', function () {
    return view('Frontend.teacherRegister');
})->name("teacherRegister");

Route::get('/studentRegister', function () {
    return view('Frontend.studentRegister');
})->name("studentRegister");

Route::get('/parentRegister', function () {
    return view('Frontend.parentRegister');
})->name("k");


Route::get('certificate', function () {
    return view('Frontend.certificate');
})->name("certificate");

// Route::get('certificate/{id?}', function () {
//     return view('Frontend.certificate');
// })->name('b');

Auth::routes(['verify'=>true]);

// Route::get('/hoome', [UserController::class, 'index'])->name('user.index');
Route::get('/hoome', 'HomeCotroller@index')->name("home")->middleware("verified");














Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/studnetIndex', [App\Http\Controllers\StudentController::class, 'index']);
