<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordenador extends Model
{
    use HasFactory;
    protected $table = 'ordenador';
    protected $fillable = ['idInfor','marcaPc','modeloPc'];
    function informatico(){
        return $this->belongsTo('App\Models\Informatico', 'idInfor');
        /*belongs to es como la declaración de la clave foránea*/
    }    
}
