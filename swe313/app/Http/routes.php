<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
   'password' => 'Auth\PasswordController',
]);
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Reg\RegistrationController@postRegister');

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');


Route::get('logout', 'Auth\AuthController@getLogout');


Route::get('/', function () {
$tests = App\Package::paginate(50);
return view('site/home', compact('tests'));
});
Route::get('/home', function () {
$tests = App\Package::paginate(50);
$tests->setPath(url('/') . '/admin/viewuser');
return view('site/home', compact('tests'));
});

Route::get('alltest', function () {
$tests = App\Package::paginate(50);
return view('site/all', compact('tests')); //compact() function creates an array from variables and their values.
});







//website routes



Route::get('/about', function () {
    return view('site/about');
});
Route::get('/contact', function () {
    return view('site/contact-us');
});

Route::get('/admin', ['middleware' => 'auth', function () {
$user=Auth::user();
if ($user->type!=1) {
return "permission denied!!";
}
return view('admin/home');
}]);


Route::get('/admin/viewuser', ['middleware' => 'auth', function () {
$user=Auth::user();
if ($user->type!=1) {
return "permission denied!!";
}
//$events = App\Event::where('user_id', $user->id)->paginate(1);
$users = App\User::paginate(10);
$users->setPath(url('/') . '/admin/viewuser');
return view('admin/users', compact('users'));
}]);


Route::get('/admin/useractivity', ['middleware' => 'auth', function () {
$user=Auth::user();
if ($user->type!=1) {
return "permission denied!!";
}
//$events = App\Event::where('user_id', $user->id)->paginate(1);
$useractivity = App\UserActivity::paginate(10);
$useractivity->setPath(url('/') . '/admin/useractivity');
return view('admin/useractivity', compact('useractivity'));
}]);




Route::get('/admin/viewpackage', ['middleware' => 'auth', function () {
$user=Auth::user();
if ($user->type!=1) {
return "permission denied!!";
}
$tests = App\Package::paginate(10);
$tests->setPath(url('/') . '/admin/viewpackage');
return view('admin/viewpackage', compact('tests'));
}]);

Route::get('/admin/addpackage', ['middleware' => 'auth', function () {
$user=Auth::user();
if ($user->type!=1) {
return "permission denied!!";
}
return view('admin/addpackage');
}]);





//admin panel post

Route::post('/admin/addpackage', 'MyController\PackageController@packageUpload');
Route::post('/admin/dltpackage', 'MyController\PackageController@dlt');

Route::post('contact', 'UsertokenController@sendmail');

//attack 

Route::get('search', 'Search@ProcessSearch');

















