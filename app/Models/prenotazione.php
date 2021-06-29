<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prenotazione extends Model
{
    protected $table = 'prenotazione';

    protected $fillable=[
        'Nome',
        'Servizio',
        'Tipo',
        'Part_airport',
        'Dest_airport'
    ];
    
}
