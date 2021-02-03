<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informatico extends Model
{
    use HasFactory;
    protected $table = 'informatico';
    public $timestamps = false; //Cuando no tienes los declaras false y si los tuvieses, no pones la linea y sería como declararlos true.
    protected $fillable = ['imgInfor','nombreInfor','apellInfor','dniInfor','tlfInfor']; /*declaras los campos que has creado, no incluyes los que crea laravel solo*/
    function montajes(){
        return $this->hasMany('App\Models\Ordenador', 'idInfor');
    }
}
