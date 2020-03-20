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
            "messages":[
                {
                    "text": "me encanta"
                }
            ],
            "set_attributes":
            {
               "code": "'.$data[0]['id'].'"
            }
        }';
//        return response()->json($arra,200);
        return $arra;
    }
}
