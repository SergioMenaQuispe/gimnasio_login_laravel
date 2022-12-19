<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class cliente_controller extends Controller
{
    //
    public function reporte($nombre){
        $nombres = explode("_",$nombre)[0];
        $p_apellido = explode("_",$nombre)[1];
        $r = DB::select('call reporte(?,?)', array($nombres,$p_apellido));
        return $r;
    }

    public function vista_reporte($nombre){
        
        $r = $this->reporte($nombre)[0];
        return view('cliente', 
            [ 
                "codigo_entrenador" => $r->Codigo_Entrenador,
                "nombre_entrenador" => $r->Nombre_Entrenador,
                "codigo_cliente" => $r->Codigo_Cliente,
                "nombre_cliente" => $r->Nombre_Cliente,
                "edad_cliente" => $r->Edad_Cliente,
                "validacion" => $r->Validacion
            ]);
    }
}
