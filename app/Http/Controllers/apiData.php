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

    public function add_alumno($carnet, $nombre,$apellido){
        $data = new data_user;
        $data->carnet = $carnet;
        $data->nombre = $nombre;
        $data->apellido = $apellido;
        $data->save();

        return response()->json('dato almacenado',200);

    }

    public function asignar_semestre($carnet,$semestre_data){
        $id_alumno = data_user::select('id')->where('carnet','=',$carnet)->get();
        $id_alumno_data = $id_alumno[0]['id'];

        $semestres = new semestre;
        $semestres->id_alumno = $id_alumno_data;
        $semestres->semestre = $semestre_data;
        $semestres->save();

        return response()->json('semestre asignado',200);
    }

    public function pedir_usuario($carnet){
        $alumno = data_user::select('nombre','apellido')->where('carnet','=',$carnet)->get();

        $array = '{
            "messages":[
                {
                    "text": ""
                }
            ],
            "set_attributes":
            {
               "nombre_user": "'.$alumno[0]['nombre'].'",
               "apellido_user": "'.$alumno[0]['apellido'].'"


            }
        }';

        return $array;
    }
}
