<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    $result = Auth::user();
    /* output:
    {"id":1,"name":"Ayatulloh Ahadr R","email":"indiega.net@gmail.com","email_verified_at":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"created_at":"2025-01-15T20:02:01.000000Z","updated_at":"2025-01-15T20:02:01.000000Z","profile_photo_url":"https:\/\/ui-avatars.com\/api\/?name=A+A+R&color=7F9CF5&background=EBF4FF"} */

    $result = Auth::user()->currentTeam;
    /* output:
    blank*/
    return $result;
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
