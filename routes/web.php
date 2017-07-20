<?php

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

Route::get('/', 'DataController@getJob');
//  {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/postjob',function (){ 
     return view('postjob');
});



//Data Controller
Route::get('jobsearch', 'DataController@jobsearch');
Route::post('jobsearch', 'DataController@customJobSearch')->name('customjobsearch');

Route::post('postjobsubmit','DataController@jobpostsubmit');

Route::post('profilesubmit','DataController@profileSubmit')->name('profilesubmit');







//Apply Controller
Route::get('apply','ApplyController@apply')->name('applyjob');

Route::get('jobdescription/{jobid}','ApplyController@viewJobDescription')->name('jd');







Route::get('profile',function(){
    return view('profile');
});


Route::get('editprofile',function(){
    return view('editprofile');
})->name('editprofile')->Middleware('auth');



