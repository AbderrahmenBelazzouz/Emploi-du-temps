<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('folder/home');
});


Route::get('table', function ($niveau="" ,Request $req) {
    return view('folder/table')->with('data' ,['req' => $req ,'niveau' => $niveau]);
})->name('table');










Route::get('/test', function () {
    return view ("welcome");
});



Route::get('ID/{id}', function ($id) {
    echo 'ID:'.$id;
});


Route::get('/user/{name?}' , function($name='ali') {
	echo 'name:' .$name ;
 });

Route::get('/check' , function() {
$name="ali";
$prenom="gazour";
	return view("footer" ,compact('name','prenom')) ; 
 })->middleware('name1');

Route::get('/afficher' , 'name1@afficher' ) ; 




//['as' =>'b.{admin}' ],
	Route::get('b/{admin}',['as' =>'b' , function ($admin) {
    return "<h1>bonjour ME ".$admin."</h1>";}]);





Route::group(['prefix'  => '{admin}', 'where' =>['admin'=>'group|enseignant|module|salle']], function($admin)
{

	Route::get('', function ($admin) {
    return "<h1>bonjour ME ".$admin."</h1>";})->name('');





Route::get('/a', 'name1@a')->name('a'); 
Route::get('/b', ['uses' =>'name1@b' , 'as'=>'b']);
// Generating URLs...
//$url = route('profile');

// Generating Redirects...
//return redirect()->route('profile');

//-----------------------------------------------------------



/*
Route::get('/user/{id}/profile', function ($id) {
    //
})->name('profile');


$url = route('profile', ['id' => 1]);
*/

//-----------------------------------------------------------
/*
$url = route('profile', ['id' => 1, 'photos' => 'yes']);

// /user/1/profile?photos=yes
*/

//-----------------------------------------------------------

/*
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});
*/
//-----------------------------------------------------------
/*
Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // Route assigned name "admin.users"...
    })->name('users');
});
*/




/*
You may also specify route names for controller actions:

Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');
*/

Route::get('/c', 'name1@c')->name('c');
Route::get('/d', 'name1@d')->name('d'); 
Route::get('/e',  ['uses' =>'name1@e' , 'as'=>'e']);  
Route::get('/f', ['uses' =>'name1@f' , 'as'=>'f']); 
Route::get('/g', ['uses' =>'name1@g' , 'as'=>'g']); 
Route::get('/h',  'name1@h')->name('h'); 
Route::get('/i',  ['uses' =>'name1@i' , 'as'=>'i']); 
Route::get('/j', 'name1@j')->name('j');  
Route::get('/k', 'name1@k')->name('k'); 
Route::get('/l', 'name1@l')->name('l'); 


});







?>