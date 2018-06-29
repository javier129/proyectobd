<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Escuelas extends Model
{
    public $timestamps = true;
    
    public static $tabla= 'escuelas';


    public static function cantidad(){
        $tabla = self::$tabla;
        $cantidad = DB::select("select count(id) from $tabla");
        return $cantidad[0]->count;
    }

    public static function getFacultades(){
        return DB::select("SELECT id, nombre FROM facultades");
    }

    public static function getExtensiones(){
        return DB::select("SELECT id, nombre FROM extensiones");
    }

    public static function buscar($query){
        $tabla = self::$tabla;
        if(empty($query)){
            return DB::select("SELECT id, nombre from $tabla");
        }
        else{
            return DB::select("SELECT id,nombre from $tabla where nombre LIKE '%$query%' ) ");
        }
    }

    public static function addNew($nombre,$id_facultad,$id_extension){
        $tabla = self::$tabla;
        $return = DB::insert("INSERT INTO $tabla (nombre,id_facultad,id_extension) VALUES ('$nombre',$id_facultad,$id_extension)");
        return 1;
    }

    public static function borrar($id){
        $tabla = self::$tabla;
        DB::delete("DELETE FROM $tabla WHERE id = $id");
    }

    public static function getItem($id){
        $tabla = self::$tabla;
        return DB::select("SELECT * from $tabla WHERE id = $id")[0];
    }

    public static function editar($id, $nombre,$facultad,$extension){
        $tabla = self::$tabla;
        DB::update("UPDATE $tabla SET nombre='$nombre',id_facultad=$facultad ,extension=$extension WHERE id = $id");
    }
}
