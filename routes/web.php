<?php
use Illuminate\Support\Facades\App;
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
// Route::get('/bridge', function() {
//     $pusher = App::make('pusher');

//     $pusher->trigger( 'test-channel',
//                       'test-event', 
//                       array('text' => 'Preparing the Pusher Laracon.eu workshop!'));

//     return view('welcome');
// });
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home','MapController@index');
Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chat','ChatsController@index');
Route::get('messages','ChatsController@fetchMessages');
Route::post('messages','ChatsController@sendMessage');
  
