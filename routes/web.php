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

    Route::get('banner', "BannerController@index");
    Route::get('banner/create', "BannerController@create");
    Route::post('banner' , "BannerController@store");
    Route::get('banner/{id}/edit' , "BannerController@edit");
    Route::Patch('banner/{id}' , "BannerController@update");

    Route::get('about', "AboutController@index");
    Route::get('about/create', "AboutController@create");
    Route::post('about' , "AboutController@store");
    Route::get('about/{id}/edit' , "AboutController@edit");
    Route::Patch('about/{id}' , "AboutController@update");

    Route::get('event', "EventController@index");
    Route::get('event/create', "EventController@create");
    Route::post('event' , "EventController@store");
    Route::get('event/{id}/edit' , "EventController@edit");
    Route::Patch('event/{id}' , "EventController@update");

    Route::get('program', "ProgramController@index");
    Route::get('program/create', "ProgramController@create");
    Route::post('program' , "ProgramController@store");
    Route::get('program/{id}/edit' , "ProgramController@edit");
    Route::Patch('program/{id}' , "ProgramController@update");

    Route::get('project', "ProjectController@index");
    Route::get('project/create', "ProjectController@create");
    Route::post('project' , "ProjectController@store");
    Route::get('project/{id}/edit' , "ProjectController@edit");
    Route::Patch('project/{id}' , "ProjectController@update");

    Route::get('bulletin', "BulletinController@index");
    Route::get('bulletin/create', "BulletinController@create");
    Route::post('bulletin' , "BulletinController@store");
    Route::get('bulletin/{id}/edit' , "BulletinController@edit");
    Route::Patch('bulletin/{id}' , "BulletinController@update");
    
    Route::get('people/', "PeopleController@index");
    Route::get('people/create', "PeopleController@create");
    Route::get('people/youtuber', "PeopleController@youtuber");
    Route::post('people', "PeopleController@store");
    Route::get('people/{id}/edit', "PeopleController@edit");
    Route::patch('people/{id}', "PeopleController@update");

    Route::get('role', "RoleController@index");
    Route::get('role/create', "RoleController@create");
    Route::post('role' , "RoleController@store");
    Route::get('role/{id}/edit' , "RoleController@edit");
    Route::Patch('role/{id}' , "RoleController@update");

    Route::get('logout', "MainController@logout");
});