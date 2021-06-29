<?php

namespace App\Http\Controllers;

use App\Models\prenotazione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Servizi;
use Illuminate\Support\Facades\Session;
class PrenotazioneController extends Controller
{
public function getAllPrenotationByName(){
    $username = Session::get('username');
 

    try {
    //    $prenotazione= prenotazione::where($username);
        $prenotazione=(prenotazione::where("Nome",$username))->get();
       // return response()->json([$prenotazione], 200);
        return response()->json($prenotazione);
    } catch (\Exception $e) {
        return response()->json(['message'=>'prenotazione not found!'], 404);
    }
}



public function DestroyPrenotazioneByName( ){
    
    $username = Session::get('username');
    $servizio = $_POST['servizio'];
    $delete= prenotazione::where('Nome',$username)->where('Servizio',$servizio)->delete();
    return redirect("gestione_prenotazione");
}

}