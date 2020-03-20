<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_user;

class apiData extends Controller
{
    public function alumno(){
        $data = data_user::all();
        foreach ($data as $row){
            $array_data[] = [
                "set_attributes" => $row
            ];

        }

        $arra = '{
            
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
