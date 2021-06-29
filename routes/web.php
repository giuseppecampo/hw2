<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrazione;
use App\Http\Controllers\homepage;
use App\Http\Controllers\prenotazione;
use App\Http\Controllers\PrenotazioneController;
use App\Models\prenotazione as ModelsPrenotazione;
use Illuminate\Support\Facades\Redis;
use Prenotazione as GlobalPrenotazione;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', function () {
    return view('login')
    ->with('csrf_token', csrf_token());
});
Route::post('login', function () {
   $user = User :: where('username', request ('username'))->where('password', request('password'))->first();
    //print_r($user->toArray());
    if(isset($user)){
      Session::put('username', $user->username);
        return redirect('home');    
        echo "ok";
    }else {
        return redirect('login')->withInput();
        echo "not ok";
    }
});
Route::get('logout', function () {
    return redirect('login');
});
Route::get('home',function(){   
    $username=Session::get('username');
    return view('home')->with('username',$username);
});
Route::get('registrazione',function(){
    return view('registrazione')->with('csrf_token',csrf_token());
    
});
Route::get('gestione_prenotazione', function () {
    $username=Session::get('username');
    return view('gestione_prenotazione')->with('csrf_token',csrf_token())->with('username',$username);
});
Route::post('gestione_prenotazione', function () {
    $username=Session::get('username');
    return view('home')->with('csrf_token',csrf_token())->with('username',$username);
});

Route::get('hotel', function () {
    $username=Session::get('username');
    return view('hotel')->with('csrf_token',csrf_token())->with('username',$username)->with("error","Effettua la prenotazione");
});
//Route::post('gestione_prenotazione', 'App\Http\Controllers\RemoveController@elimina');
Route::get('noleggio', function () {
    $username=Session::get('username');
    return view('noleggio')->with('csrf_token',csrf_token())->with('username',$username)->with("error","Effettua la prenotazione");
});
Route::get('volo', function () {
    $username=Session::get('username');
    return view('volo')->with('csrf_token',csrf_token())->with('username',$username)->with("error","Effettua la prenotazione");
});
Route::post('/registrazione', 'App\Http\Controllers\registrazione@register');
Route::get('/PrenotazioneController', 'App\Http\Controllers\PrenotazioneController@getAllPrenotationByName');
Route::get('/FetchHotel', 'App\Http\Controllers\FetchHotel@getAllHotel');
Route::get('/FetchNoleggio', 'App\Http\Controllers\FetchNoleggio@getAllNoleggio');
Route::post('/DestroyPrenotazioneByName', 'App\Http\Controllers\PrenotazioneController@DestroyPrenotazioneByName');
Route::get('/FetchVolo', 'App\Http\Controllers\FetchVolo@getAllVolo');
Route::post('/FetchInserimento', 'App\Http\Controllers\FetchNoleggio@InsertNoleggio');
Route::post('/albergo', 'App\Http\Controllers\FetchHotel@InsertHotel');
//Route::post('/noleggio', 'App\Http\Controllers\FetchNoleggio@InsertNoleggio');
Route::post('/volo', 'App\Http\Controllers\FetchVolo@InsertVolo');
Route::get('/homepage', 'App\Http\Controllers\homepage@getAllServizi');
