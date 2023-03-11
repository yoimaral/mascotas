<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendauserspet extends Model
{
    use HasFactory;


    protected $fillable = [
        'fecha',
        'idPets',
        'idUsers',
    ];
}