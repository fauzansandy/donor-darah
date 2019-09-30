<?php

use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Storage;

$router->get('/', function () use ($router) {
    Json::set('message', 'BEP BEP WELCOME TO API OF ACC PARTNER');
    return response()->json(Json::get(), 200);
});

$router->post('/login', ['uses' => 'Authentication\AuthenticationController@Login', 'middleware' => ['Authentication.Login']]);
