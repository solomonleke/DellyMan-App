<?php

use App\Http\Controllers\DellyController;
use App\Http\Controllers\DellymanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
// Route::get('/isAdmin', [DellymanController::class, 'isAdmin']);
// Route::get('/loggin', function(){
//     Session::put('isAdmin', 'true');
//     // dd('login screen');
// });
// Route::get('/loggout', function(){
//     Session::flush();
//     // dd('login screen');
// });
Route::match(['post', 'get'],'/admin-login', [DellymanController::class, 'login']);



Route::group(['middleware'=>"dellyAuth"], function(){





Route::get('/logout', function(){

    if(session()->has('login')){
        // session()->pull('login');
        Session::flush();
    }
    return redirect('/admin-login');
});



// Route::get('/admin-login', function(){

//     if(session()->has('login')){
//       return redirect('/Dashboard');
//     }
//     return redirect('/admin-login');
// });










Route::get('/Dashboard', [DellymanController::class, 'dashboard']);
Route::post('/Dashboard', [DellymanController::class, 'dashboard']);

Route::match(['post', 'get'],'/faq-post-change', [DellymanController::class, 'faq_post_change']);


Route::match(['post', 'get'],'/view-contacts', [DellymanController::class, 'view_contacts']);

Route::match(['post', 'get'],'/add-new-faq', [DellymanController::class, 'add_new_faq']);

Route::match(['post', 'get'],'/delete/{id}', [DellymanController::class, 'delete']);

});


Route::match(['post', 'get'],'/sign-up', [DellymanController::class, 'signup']);
Route::match(['post', 'get'],'/validation', [DellymanController::class, 'Validation_page']);

Route::get('/', [DellyController::class, 'index']);
Route::get('/how-it-works', [DellyController::class, 'how_it_works']);
Route::get('/faq', [DellyController::class, 'faq']);

Route::match(['post','get'],'/contact', [DellyController::class, 'contact']);

Route::get('/sign', [DellyController::class, 'sign']);









