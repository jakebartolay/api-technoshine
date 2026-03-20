<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\User;
use App\Models\Services;

Route::get('/', function () {
    $users = App\Models\User::take(5)->get(); // DB users

    $projects = App\Models\Project::all(); // DB projects

    $services =  App\Models\Service::all(); 

    return view('index', compact('users','projects','services'));
});