<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

// Facades

use Hash;

class Terceros extends Model implements AuthenticatableContract
{
	use Authenticatable;
	
	// TABLA DEL MODELO
	protected $table      ='usuarios';

	//	NOMBRE DE LA LLAVE PRINCIAL EN LA TABLA
	protected $primaryKey ='user_id';

	// CAMPOS QUE PODRÁN SER LLENADOS POR EL USUARIO
	protected $fillable   = ['name','email', 'password',];

	//	CAMPOS QUE SE MANTIENEN OCULTOS AL USUARIO
	protected $hidden     = ['password', 'remember_token',];

	// 	MANEJO DE FECHAS CON LA CLASE CARBON
	protected $dates      = ['deleted_at'];

    //----------------------- //----------------------- //----------------------- //-----------------------
	// MUTATORS
	//		SE ENCARGAN DE HACER CAMBIOS EN LOS DATOS ANTES DE SER GRABAJOS EN LA BASE DE DATOS.
	//		EJEMPLO: CORREO EN MINUSCULAS
	//				 PASSWORD ENCRIPTADO
	//----------------------- //----------------------- //----------------------- //-----------------------
    public function setPasswordAttribute ( $value ){
        $this->attributes['password'] = Hash::make( $value );
    }

    public function setEmailAttribute ( $value ){
        $this->attributes['email'] = mb_strtolower( $value, 'UTF-8');
    }

    public function setNameAttribute ( $value ){

    	$name = trim( $value );
    	$name = preg_replace('/\s\s+/',' ', $name );
    	
        $this->attributes['name'] = $name;
    }



}
