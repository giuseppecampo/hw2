<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servizi;
class homepage extends Controller
{
  
    public function getAllServizi(){
        $servizi= servizi::all();
        return $servizi;
    }
}
?>