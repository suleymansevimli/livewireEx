<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test',function (){
    $column = [
        'name' => 'users',
        'id' => 1
    ];

    $modelName = Str::studly(Str::singular($column['name']));
    $name = 'App\\'.$modelName;

    $model = $name::query()->find($column['id']);
    $revision = $model->name;
    return $revision;
});

Route::livewire('/test-wire',);
