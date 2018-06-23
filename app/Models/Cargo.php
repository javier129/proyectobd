<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Cargo extends Model
{
    public $table = "cargos";
    public $timestamps = true;
    protected $fillable = array(
        'nombre',
        'tipo'
    );

    public static function cantidad(){
        return DB::select('select * from cargos');
    }
}
