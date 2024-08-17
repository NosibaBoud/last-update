<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\logoutcontroller;
use App\Models\mtest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
});
Route::get('/results', function () {
    return view('results');
    });
Route::get('/my appointments', function () {
    return view('my appointments');
    });
    Route::get('/my tests', function () {
        return view('my tests');
        });
        Route::get('/tests list', function () {
            return view('tests list',[
                'tests'=>mtest::all()
        ]);

         });
Route::get('/tests/{id}', function ($id) {
    $test=mtest::find($id);
   
        //dd($test);

            return view('test',['test'=>$test]);

}); 
Route::post('/logout',[logoutcontroller::class,'destroy']);
//route::get('/register',[RegisterController::class,'create']);
//route::post('/register',[RegisterController::class,'store']);//post=requst
//route::get('/login',[LoginController::class,'create']);
//route::post('/login',[RegisterController::class,'store']);
//Route::group(['middleware' => ['auth']], function ()
 //{     

Auth::routes();