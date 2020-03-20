<?php

use Illuminate\Support\Facades\Route;


Route::get('alumnos','apiData@alumno');
Route::get('semestre/{carnet}','apiData@get_Semestre');
