<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
 
class auth_controller extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        request()->validate([
            'nombres' => 'required' ,
            'primer_apellido' => 'required'
        ]);

        $credentials = $request->only('nombres','primer_apellido');
        if(Auth::attempt($credentials)){
            return redirect()->intended('cliente');
        }

        return Redirect::to('login')->withSuccess('No estas en la lista F');
    }
}
