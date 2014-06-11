<?php

Route::get('/', ['uses'=>'HomeController@index']);
Route::get('login', ['uses'=>'HomeController@login']);
Route::post('login',['uses'=>'HomeController@doLogin']);
Route::get('logout',['uses'=>'HomeController@logout']);
Route::get('empleado/{id}',['uses'=>'EmployeeController@index']);
