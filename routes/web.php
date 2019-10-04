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
$router->get('/dealer/user/new', 'CMS\DealerManagement\DealerManagementController@UserDetailNew');
$router->get('/dealer/user/new/grab/masterdealer', 'CMS\DealerManagement\DealerManagementController@GrabMasterDealer');
$router->get('/dealer/user/new/grab/masterinsentifscheme', 'CMS\DealerManagement\DealerManagementController@GrabMasterInsentifScheme');
$router->get('/dealer/user/new/grab/masterinsentifscheme/{idmaster}/salesselect', 'CMS\DealerManagement\DealerManagementController@GrabMasterInsentifSchemeSalesSelect');
$router->get('/dealer/user/{id}', 'CMS\DealerManagement\DealerManagementController@UserDetail');
$router->get('/dealer/verification/request', 'CMS\DealerManagement\DealerManagementController@VerificationRequest');
$router->get('/dealer/verification/request/{id}', 'CMS\DealerManagement\DealerManagementController@VerificationRequestDetail');
$router->get('/dealer/verification/request/{id}/grab/masterdealer', 'CMS\DealerManagement\DealerManagementController@VerificationRequestDetailGrabMasterDealer');
$router->get('/dealer/verification/request/{id}/grab/masterinsentifscheme', 'CMS\DealerManagement\DealerManagementController@VerificationRequestDetailGrabMasterInsentifScheme');
$router->get('/dealer/verification/request/{id}/grab/masterinsentifscheme/{idmaster}/salesselect', 'CMS\DealerManagement\DealerManagementController@VerificationRequestDetailGrabMasterInsentifSchemeSalesSelect');

$router->get('/application/verified', 'CMS\Application\ApplicationController@Verified');
$router->get('/application/verified/{id}', 'CMS\Application\ApplicationController@VerifiedDetail');
$router->get('/application/notverified', 'CMS\Application\ApplicationController@NotVerified');
$router->get('/application/notverified/{id}', 'CMS\Application\ApplicationController@NotVerifiedDetail');

$router->get('/reward/dealer', 'CMS\Reward\RewardController@Dealer');

$router->get('/content/master', 'CMS\ContentManagement\ContentManagementController@Master');

$router->get('/content/master/contact', 'CMS\ContentManagement\ContentManagementController@MasterContact');
$router->get('/content/master/contact/new', 'CMS\ContentManagement\ContentManagementController@MasterContactNew');
$router->get('/content/master/contact/{id}', 'CMS\ContentManagement\ContentManagementController@MasterContactDetail');

$router->get('/content/master/termco', 'CMS\ContentManagement\ContentManagementController@MasterTermCo');
$router->get('/content/master/termco/new', 'CMS\ContentManagement\ContentManagementController@MasterTermCoNew');
$router->get('/content/master/termco/{id}', 'CMS\ContentManagement\ContentManagementController@MasterTermCoDetail');

$router->get('/content/master/faq', 'CMS\ContentManagement\ContentManagementController@MasterFAQ');
$router->get('/content/master/faq/new', 'CMS\ContentManagement\ContentManagementController@MasterFAQNew');
$router->get('/content/master/faq/{id}', 'CMS\ContentManagement\ContentManagementController@MasterFAQDetail');

$router->get('/content/master/period-provision', 'CMS\ContentManagement\ContentManagementController@MasterPeriodProvision');
$router->get('/content/master/period-provision/new', 'CMS\ContentManagement\ContentManagementController@MasterPeriodProvisionNew');
$router->get('/content/master/period-provision/{id}', 'CMS\ContentManagement\ContentManagementController@MasterPeriodProvisionDetail');


$router->get('/content/master/cash-rewards', 'CMS\ContentManagement\ContentManagementController@MasterCashRewards');
$router->get('/content/master/cash-rewards/new', 'CMS\ContentManagement\ContentManagementController@MasterCashRewardsNew');
$router->get('/content/master/cash-rewards/{id}', 'CMS\ContentManagement\ContentManagementController@MasterCashRewardsDetail');

$router->get('/content/master/info', 'CMS\ContentManagement\ContentManagementController@MasterInfo');
$router->get('/content/master/info/new', 'CMS\ContentManagement\ContentManagementController@MasterInfoNew');
$router->get('/content/master/info/{id}', 'CMS\ContentManagement\ContentManagementController@MasterInfoDetail');

$router->get('/content/feedback/critics', 'CMS\ContentManagement\ContentManagementController@FeedBackCritics');
$router->get('/content/feedback/suggestion', 'CMS\ContentManagement\ContentManagementController@FeedBackSuggestion');

$router->get('/content/pushnotification', 'CMS\ContentManagement\ContentManagementController@PushNotification');
$router->get('/content/pushnotification/new', 'CMS\ContentManagement\ContentManagementController@PushNotificationNew');
$router->get('/content/pushnotification/{id}', 'CMS\ContentManagement\ContentManagementController@PushNotificationDetail');

$router->get('/content/news', 'CMS\ContentManagement\ContentManagementController@News');
$router->get('/content/news/new', 'CMS\ContentManagement\ContentManagementController@NewsNew');
$router->get('/content/news/{id}', 'CMS\ContentManagement\ContentManagementController@NewsDetail');
