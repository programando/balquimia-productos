<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//Facades
use Config;
use Lang;
use Route;

class TercerosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $CurrentRoute = Route::CurrentRouteName();
         
         if ( $CurrentRoute =='registro'  ){
            $rules = [

                'name'      => [
                        'required',
                        'regex:'        . Config::get('app_config.name_regex'),
                        'max:'          . Config::get('app_config.name_max_length'),
                    ],


                'email'      => [
                        'required',
                        'unique:usuarios,email',
                        'email',
                        'max:'      .Config::get('app_config.email_max_length'),
                    ],

   
                'password'      => [
                        'required',
                        'confirmed',
                        'max:'      .Config::get('app_config.password_max_length'),
                        'min:'      .Config::get('app_config.password_min_length'),
                    ],

                'accept_disclamer'      => [
                        'required',
                        'in:accepted',
                    ],

            ];
         }
 
        return $rules;
    }

    /**
        ESTA FUNCION ME PERMITE SOBREESCIBIR EL TÍTULO DE LOS CAMPO
    **/
    public function attributes(){

        return [
            'name'         => Lang::get('app_textos.registro_lbl_nom') ,
            'email'        => Lang::get('app_textos.registro_lbl_email') ,
            'password'     => Lang::get('app_textos.registro_lbl_password') ,
            'email.unique' => Lang::get('app_textos.registro_lbl_password') ,
        ];
    }

    /**
        ESTA FUNCION ME PERMITE SOBREESCIBIR LOS MENSAJES DE VALIDACION QUE POR DEFECTOS TENEMOS EN EL ARCHIVO DE CONFIGURACION
        USO:
            CAMPO.REGLA => VALOR
    **/
    public function messages(){

        return [
            'accept_disclamer.required' => Lang::get('app_textos.disclamer_validation') ,
            'accept_disclamer.in'       => Lang::get('app_textos.disclamer_validation') ,
            'email.unique'              => Lang::get('app_textos.registro_email_validation') ,
            'name.regex'                => Lang::get('app_textos.registro_name_regex') ,
        ];
    }
    



}
