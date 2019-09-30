<?php

/* Users */
// getters
$router->get('/user', ['uses' => 'User\UserBrowseController@get', 'middleware' => ['ArrQuery']]);
$router->get('/user/{query:.+}', ['uses' => 'User\UserBrowseController@get', 'middleware' => ['ArrQuery']]);
// actions
$router->post('/user', ['uses' => 'User\UserController@Insert', 'middleware' => ['User.Insert']]);
$router->put('/user/{id}', ['uses' => 'User\UserController@Update', 'middleware' => ['User.Update']]);
$router->delete('/user/{id}', ['uses' => 'User\UserController@Delete', 'middleware' => ['User.Delete']]);
// Developer
$router->post('/user/{id}/developer/token', ['uses' => 'User\UserController@DeveloperToken', 'middleware' => ['User.Developer.Token']]);

/* Blast Position */
// getters
$router->get('/position', ['uses' => 'Position\PositionBrowseController@get', 'middleware' => ['ArrQuery']]);
$router->get('/position/{query:.+}', ['uses' => 'Position\PositionBrowseController@get', 'middleware' => ['ArrQuery']]);
// actions
$router->post('/position', ['uses' => 'Position\PositionController@Insert', 'middleware' => ['Blast.Position.Insert']]);
$router->put('/position/{id}', ['uses' => 'Position\PositionController@Update', 'middleware' => ['Blast.Position.Update']]);
$router->delete('/position/{id}', ['uses' => 'Position\PositionController@Delete', 'middleware' => ['Blast.Position.Delete']]);
