<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "MainController@index");
Route::post('auth', "MainController@auth");
Route::get('forgot', "MainController@forgot");
Route::get('dashboard', "MainController@dashboard");

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', "MainController@dashboard");

    Route::get('chairity', "ChairityController@index");
    Route::get('chairity/create', "ChairityController@create");
    Route::post('chairity' , "ChairityController@store");
    Route::get('chairity/{id}/edit' , "ChairityController@edit");
    Route::Patch('chairity/{id}' , "ChairityController@update");

    Route::get('banner', "ChairitiesController@index");
    Route::get('banner/create', "ChairitiesController@create");
    Route::post('banner' , "ChairitiesController@store");
    Route::get('banner/{id}/edit' , "ChairitiesController@edit");
    Route::Patch('banner/{id}' , "ChairitiesController@update");

    Route::get('about', "ChairitiesController@index");
    Route::get('about/create', "ChairitiesController@create");
    Route::post('about' , "ChairitiesController@store");
    Route::get('about/{id}/edit' , "ChairitiesController@edit");
    Route::Patch('about/{id}' , "ChairitiesController@update");

    Route::get('event', "ChairitiesController@index");
    Route::get('event/create', "ChairitiesController@create");
    Route::post('event' , "ChairitiesController@store");
    Route::get('event/{id}/edit' , "ChairitiesController@edit");
    Route::Patch('event/{id}' , "ChairitiesController@update");

    Route::get('program', "ChairitiesController@index");
    Route::get('program/create', "ChairitiesController@create");
    Route::post('program' , "ChairitiesController@store");
    Route::get('program/{id}/edit' , "ChairitiesController@edit");
    Route::Patch('program/{id}' , "ChairitiesController@update");

    Route::get('project', "ChairitiesController@index");
    Route::get('project/create', "ChairitiesController@create");
    Route::post('project' , "ChairitiesController@store");
    Route::get('project/{id}/edit' , "ChairitiesController@edit");
    Route::Patch('project/{id}' , "ChairitiesController@update");

    Route::get('bulletin', "BulletinController@index");
    Route::get('bulletin/create', "BulletinController@create");
    Route::post('bulletin' , "BulletinController@store");
    Route::get('bulletin/{id}/edit' , "BulletinController@edit");
    Route::Patch('bulletin/{id}' , "BulletinController@update");
    
    Route::get('people/{modul}', "PeopleController@index");
    Route::get('people/{modul}/create', "PeopleController@create");
    Route::get('people/{modul}/youtuber', "PeopleController@youtuber");
    Route::post('people', "PeopleController@store");
    Route::get('people/{modul}/{id}/edit', "PeopleController@edit");
    Route::patch('people/{id}', "PeopleController@update");

    Route::get('role', "RoleController@index");
    Route::get('role/create', "RoleController@create");
    Route::post('role' , "RoleController@store");
    Route::get('role/{id}/edit' , "RoleController@edit");
    Route::Patch('role/{id}' , "RoleController@update");

    Route::get('logout', "MainController@logout");
});