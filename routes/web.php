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

$router->get('/dealer/user', 'CMS\DealerManagement\DealerManagementController@User');
$router->get('/dealer/verification/request', 'CMS\DealerManagement\DealerManagementController@VerificationRequest');

$router->get('/application/verified', 'CMS\Application\ApplicationController@Verified');
$router->get('/application/notverified', 'CMS\Application\ApplicationController@NotVerified');

$router->get('/reward/dealer', 'CMS\Reward\RewardController@Dealer');

$router->get('/content/master', 'CMS\ContentManagement\ContentManagementController@Master');
$router->get('/content/feedback', 'CMS\ContentManagement\ContentManagementController@FeedBack');
$router->get('/content/pushnotification', 'CMS\ContentManagement\ContentManagementController@PushNotification');
$router->get('/content/news', 'CMS\ContentManagement\ContentManagementController@News');
