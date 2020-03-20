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
            "set_attributes": {
                '.$data.'
            }
        }';
        return response()->json($array_data,200);
    }
}
