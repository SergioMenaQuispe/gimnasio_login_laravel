<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class cliente_controller extends Controller
{
    //
    public function reporte(Request $request){
        $nombres = $request->input('nombres');
        $p_apellido = $request->input('p_apellido');
        $r = DB::select('call reporte(?,?)', array($nombres,$p_apellido));
        return $r;
    }

    public function vista_reporte(Request $request){
        
        $r = $this->reporte($request)[0];
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
