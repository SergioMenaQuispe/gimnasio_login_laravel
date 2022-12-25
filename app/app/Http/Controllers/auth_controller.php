<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\cliente;
use App\Http\Controllers\cliente_controller;

 
class auth_controller extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function check_login(Request $request){
        $clientes = DB::table('cliente')->get()[0];
        
        $nombres = $request->input('nombres');
        $p_apellido = $request->input('p_apellido');

        $result = DB::select('call existe_cliente(?,?)', array($nombres,$p_apellido));

        if(count($result) == 0){
            return view('/login', array('message' => 'No se encontró el cliente')) ;
        }else{
            $controller = new cliente_controller;
            return $controller->vista_reporte($request);
        }

    }
}
