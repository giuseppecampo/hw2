<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;

use App\Models\prenotazione;

use Illuminate\Support\Facades\Session;
class FetchHotel extends Controller
{
    public function getAllHotel(){
        $hotel= hotel::all();
        return $hotel;
    }
    public function InsertHotel(){
        $username = Session::get('username');
        $servizio = $_POST['servizio'];
        $part_airport = $_POST['part_airport'];
        $tipo =  "hotel";
        $dest_airport = $_POST['dest_airport'];
    
        
        $check = prenotazione::where('servizio',$servizio)->where('part_airport',$part_airport)->where('dest_airport',$dest_airport)->count();
        if($check==true){
            $error="Prenotazione non effettuata, Hotel impegnato!";
      return view("hotel")->with("error",$error)->with('csrf_token',csrf_token())->with('username',$username);   
        }else{
         try{    prenotazione::insert([
                 'Nome' =>  $username,
                 'Servizio' =>  $servizio,
                 'Tipo'=> $tipo,
                 'Part_airport'=> $part_airport,
                 'Dest_airport'=> $dest_airport
     
             ]);
             return redirect("gestione_prenotazione");
         }catch (\Exception $e) {
             $error="Prenotazione non effettuata!";
      
             return view("hotel")->with("error",$error)->with('csrf_token',csrf_token())->with('username',$username);}}
          
    }
}
