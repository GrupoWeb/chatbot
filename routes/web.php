<?php

use Illuminate\Support\Facades\Route;


Route::get('alumnos','apiData@alumno');
Route::get('semestre/{carnet}','apiData@get_Semestre');

Route::get('add_alumno/{carnet}/{nombre}/{apellido}','apiData@add_alumno');
