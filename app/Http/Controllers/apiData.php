<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_user;
use App\semestre;

class apiData extends Controller
{

    public function get_Semestre($carnet){
        $data = semestre::select('semestre')->join('data_user','data_user.id','=','semestre.id_alumno')->where('carnet','=',$carnet)->get();

        $array = '{
            "messages":[
                {
                    "text": "."
                }
            ],
            "set_attributes":
            {
               "semestre": "'.$data[0]['semestre'].'"
            }
        }';
        return $array;
    }
    public function alumno(){
        $data = data_user::all();
        foreach ($data as $row){
            $array_data[] = [
                "set_attributes" => $row
            ];

        }

        $arra = '{
            "messages":[
                {
                    "text": "."
                }
            ],
            "set_attributes":
            {
               "code": "'.$data[0]['id'].'",
               "carnet": "'.$data[0]['carnet'].'",
               "nombre": "'.$data[0]['nombre'].'",
               "apellido": "'.$data[0]['apellido'].'"


            }
        }';
//        return response()->json($data,200);
        return $arra;
    }
}
