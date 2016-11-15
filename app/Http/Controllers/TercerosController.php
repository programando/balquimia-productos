<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
 
use App\Http\Requests\TercerosRequest;

//MODELOS
use App\Models\Terceros;

// FACADES
use Auth;
use Form;
use Lang;
use Redirect;
use View;




class TercerosController extends Controller
{
    

     public function getLogin(){
    	 
		return View::make('terceros.login');
    }

    public function postLogin(){
    	dd("PostLogin");
    }

 	public function getRegistro(){
		$data      =         Lang::get('app_textos.app_titulo_registro');
		return View::make('terceros.registro',compact('data'));
 	}

 	public function postRegistro(TercerosRequest $requests ){
 		
 		$user = Terceros::create($requests->only('name','email', 'password'));
 		Auth::login($user,true);
 		return Redirect::route('home')->with('alert.success', Lang::get('app_textos.registro_ok_login'));
 		
 	}

 	public function getSalir(){

 		if ( Auth::check() ){
 				Auth::logout();
 				return Redirect::route('home')->with('alert.success', Lang::get('app_textos.logout_ok'));
 			}else{
 				return Redirect::route('home');
 			}
 	}

}
 