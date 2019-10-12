<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/logout', 'CMS\Authentication\AuthenticationController@Logout');

$router->get('/', 'CMS\Home\HomeController@Home');

$router->get('/position', 'CMS\Position\PositionController@Home');

$router->get('/user', 'CMS\User\UserController@Home');
$router->get('/user/new', 'CMS\User\UserController@New');
$router->get('/user/{id}', 'CMS\User\UserController@Detail');

$router->get('/checklist', 'CMS\Checklist\ChecklistController@Home');

$router->get('/monitoring', 'CMS\Monitoring\MonitoringController@Home');
$router->get('/monitoring/new', 'CMS\Monitoring\MonitoringController@New');
$router->get('/monitoring/{id}', 'CMS\Monitoring\MonitoringController@Detail');

$router->get('/reaksi', 'CMS\Reaksi\ReaksiController@Home');

$router->get('/content/pushnotification', 'CMS\ContentManagement\ContentManagementController@PushNotification');
$router->get('/content/pushnotification/new', 'CMS\ContentManagement\ContentManagementController@PushNotificationNew');
$router->get('/content/pushnotification/{id}', 'CMS\ContentManagement\ContentManagementController@PushNotificationDetail');

$router->get('/content/news', 'CMS\ContentManagement\ContentManagementController@News');
$router->get('/content/news/new', 'CMS\ContentManagement\ContentManagementController@NewsNew');
$router->get('/content/news/{id}', 'CMS\ContentManagement\ContentManagementController@NewsDetail');
