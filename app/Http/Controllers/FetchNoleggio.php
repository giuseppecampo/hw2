<?php

namespace App\Http\Controllers;

use App\Models\automobile;
use App\Models\prenotazione;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
class FetchNoleggio extends Controller
{
  
    public function getAllNoleggio(){
        $noleggio= automobile::all();
        return $noleggio;
    }

    public function InsertNoleggio(){
    $username = Session::get('username');
    $servizio = $_POST['servizio'];
    $part_airport = $_POST['part_airport'];
    $tipo =  "automobile";
    $dest_airport = $_POST['dest_airport'];

    $check = prenotazione::where('servizio',$servizio)->where('part_airport',$part_airport)->count();
   if($check==true){
       $error="Prenotazione non effettuata, Automobile impegnata!";
 return view("noleggio")->with("error",$error)->with('csrf_token',csrf_token())->with('username',$username);   
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
 
        return view("noleggio")->with("error",$error)->with('csrf_token',csrf_token())->with('username',$username);}}
     
}
}
