<?php

/* Users */
// getters
$router->get('/user', ['uses' => 'User\UserBrowseController@get', 'middleware' => ['ArrQuery']]);
$router->get('/user/{query:.+}', ['uses' => 'User\UserBrowseController@get', 'middleware' => ['ArrQuery']]);
// actions
$router->post('/patient', ['uses' => 'Patient\PatientController@Insert', 'middleware' => ['Patient.Insert']]);

$router->post('/user', ['uses' => 'User\UserController@Insert', 'middleware' => ['User.Insert']]);
$router->put('/user/{id}', ['uses' => 'User\UserController@Update', 'middleware' => ['User.Update']]);
$router->delete('/user/{id}', ['uses' => 'User\UserController@Delete', 'middleware' => ['User.Delete']]);

$router->get('/notification', ['uses' => 'Notification\NotificationController@get', 'middleware' => ['ArrQuery']]);
$router->get('/notification/{query:.+}', ['uses' => 'Notification\NotificationController@get', 'middleware' => ['ArrQuery']]);
$router->post('/notification', ['uses' => 'Notification\NotificationController@Insert', 'middleware' => ['Notification.Insert']]);
$router->put('/notification/{id}', ['uses' => 'Notification\NotificationController@Update', 'middleware' => ['Notification.Update']]);
$router->delete('/notification/{id}', ['uses' => 'Notification\NotificationController@Delete', 'middleware' => ['Notification.Delete']]);

$router->post('/patient_transfusions', ['uses' => 'User\PatientController@InsertTransfusion', 'middleware' => ['Patient.InsertTransfusion']]);
$router->put('/patient_transfusions/{id}', ['uses' => 'Patient\PatientController@UpdateTransfusion', 'middleware' => ['Patient.UpdateTransfusion']]);
$router->delete('/patient_transfusions/{id}', ['uses' => 'Patient\PatientController@DeleteTransfusion', 'middleware' => ['Patient.DeleteTransfusion']]);
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
