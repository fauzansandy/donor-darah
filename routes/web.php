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
$router->get('/dealer/user/{id}', 'CMS\DealerManagement\DealerManagementController@UserDetail');
$router->get('/dealer/verification/request', 'CMS\DealerManagement\DealerManagementController@VerificationRequest');
$router->get('/dealer/verification/request/{id}', 'CMS\DealerManagement\DealerManagementController@VerificationRequestDetail');
$router->get('/dealer/verification/request/{id}/grab/masterdealer', 'CMS\DealerManagement\DealerManagementController@VerificationRequestDetailGrabMasterDealer');
$router->get('/dealer/verification/request/{id}/grab/masterinsentifscheme', 'CMS\DealerManagement\DealerManagementController@VerificationRequestDetailGrabMasterInsentifScheme');
$router->get('/dealer/verification/request/{id}/grab/masterinsentifscheme/{idmaster}/salesselect', 'CMS\DealerManagement\DealerManagementController@VerificationRequestDetailGrabMasterInsentifSchemeSalesSelect');

$router->get('/application/verified', 'CMS\Application\ApplicationController@Verified');
$router->get('/application/notverified', 'CMS\Application\ApplicationController@NotVerified');

$router->get('/reward/dealer', 'CMS\Reward\RewardController@Dealer');

$router->get('/content/master', 'CMS\ContentManagement\ContentManagementController@Master');
$router->get('/content/master/contact', 'CMS\ContentManagement\ContentManagementController@MasterContact');

$router->get('/content/master/termco', 'CMS\ContentManagement\ContentManagementController@MasterContactTermCo');
$router->get('/content/master/termco/new', 'CMS\ContentManagement\ContentManagementController@MasterContactTermCoNew');
$router->get('/content/master/termco/{id}', 'CMS\ContentManagement\ContentManagementController@MasterContactTermCoDetail');

$router->get('/content/master/faq', 'CMS\ContentManagement\ContentManagementController@MasterContactFAQ');
$router->get('/content/master/faq/new', 'CMS\ContentManagement\ContentManagementController@MasterContactFAQNew');
$router->get('/content/master/faq/{id}', 'CMS\ContentManagement\ContentManagementController@MasterContactFAQDetail');

$router->get('/content/master/period-provision', 'CMS\ContentManagement\ContentManagementController@MasterContactPeriodProvision');
$router->get('/content/master/period-provision/new', 'CMS\ContentManagement\ContentManagementController@MasterContactPeriodProvisionNew');
$router->get('/content/master/period-provision/{id}', 'CMS\ContentManagement\ContentManagementController@MasterContactPeriodProvisionDetail');


$router->get('/content/master/cash-rewards', 'CMS\ContentManagement\ContentManagementController@MasterContactCashRewards');
$router->get('/content/master/info', 'CMS\ContentManagement\ContentManagementController@MasterContactInfo');

$router->get('/content/feedback/critics', 'CMS\ContentManagement\ContentManagementController@FeedBackCritics');
$router->get('/content/feedback/suggestion', 'CMS\ContentManagement\ContentManagementController@FeedBackSuggestion');
$router->get('/content/pushnotification', 'CMS\ContentManagement\ContentManagementController@PushNotification');

$router->get('/content/news', 'CMS\ContentManagement\ContentManagementController@News');
$router->get('/content/news/new', 'CMS\ContentManagement\ContentManagementController@NewsNew');
$router->get('/content/news/{id}', 'CMS\ContentManagement\ContentManagementController@NewsDetail');
