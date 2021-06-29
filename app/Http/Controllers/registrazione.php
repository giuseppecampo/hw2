<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Error;
use Illuminate\Foundation\Auth\User;
use users as GlobalUsers;

class registrazione extends Controller
{
   
 public function register(){
        $username= $_POST["username"];
        
        $nome= $_POST["nome"];
        
        $cognome= $_POST["cognome"];
        
        $email= $_POST["email"];
        $password= $_POST["password"];  
     
        try{  
            User::insert([
            'username' =>  $username,
            'password' =>  $password,
            'nome' =>  $nome,
            'cognome' =>  $cognome,
            'email' =>  $email,
        ]);    
        return redirect("login");
    }catch (\Exception $e) {
       
        return response()->json(['message'=>'registrazione not done!'], 404);
       // return redirect("registrazione");


}
}
}
?>