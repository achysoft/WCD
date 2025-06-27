<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Load system routes first
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

// --------------------------------------------------------------------
// FRONTEND ROUTES
// --------------------------------------------------------------------
$routes->group('', ['namespace' => 'App\Controllers\Frontend'], function($routes) {
    $routes->get('/', 'HomeController::index', ['as' => 'frontendHome']);
    $routes->get('parks', 'HomeController::parks', ['as' => 'landscapeParks']);
    $routes->get('reserves', 'HomeController::reserves', ['as' => 'landscapeReserves']);
    $routes->get('policyPublications', 'HomeController::policyPublications', ['as' => 'policypolicyPublications']);
    $routes->get('conservation/Ongoing', 'HomeController::ongoingProjects', ['as' => 'conservationOngoingProjects']);
    $routes->get('biodiversity/Flora', 'HomeController::flora', ['as' => 'biodiversityFlora']);
    $routes->post('biodiversity/flora/get_ecosystems_by_type', 'Frontend\HomeController::get_ecosystems_by_type');

});

// --------------------------------------------------------------------
// BACKEND / ADMIN ROUTES
$routes->group('admin', function($routes) {
    $routes->get('/', 'DashboardController::index', ['as' => 'adminDashboard']); // <- for /admin
    $routes->get('dashboard', 'DashboardController::index', ['as' => 'dashboard']); // /admin/dashboard
    $routes->get('index2','DashboardController::index2',['as' => 'index2']);
    $routes->get('index3','DashboardController::index3',['as' => 'index3']);
    $routes->get('index4','DashboardController::index4',['as' => 'index4']);
    $routes->get('index5','DashboardController::index5',['as' => 'index5']);
    $routes->get('index6','DashboardController::index6',['as' => 'index6']);
    $routes->get('index7','DashboardController::index7',['as' => 'index7']);
    $routes->get('index8','DashboardController::index8',['as' => 'index8']);
    $routes->get('index9','DashboardController::index9',['as' => 'index9']);
});
$routes->group('aiapplication', function($routes) {
    $routes->get('code-generator','AiapplicationController::codeGenerator',['as' => 'codeGenerator']);
    $routes->get('code-generator-new','AiapplicationController::codeGeneratorNew',['as' => 'codeGeneratorNew']);
    $routes->get('image-generator','AiapplicationController::imageGenerator',['as' => 'imageGenerator']);
    $routes->get('text-generator','AiapplicationController::textGenerator',['as' => 'textGenerator']);
    $routes->get('text-generator-new','AiapplicationController::textGeneratorNew',['as' => 'textGeneratorNew']);
    $routes->get('video-generator','AiapplicationController::videoGenerator',['as' => 'videoGenerator']);
    $routes->get('voice-generator','AiapplicationController::voiceGenerator',['as' => 'voiceGenerator']);
});

$routes->group('authentication', function($routes) {
    $routes->get('forgot-password','AuthenticationController::forgotPassword',['as' => 'forgotPassword']);
    $routes->get('signin','AuthenticationController::signin',['as' => 'signin']);
    $routes->get('signup','AuthenticationController::signup',['as' => 'signup']);
});

$routes->group('chart', function($routes) {
    $routes->get('column-chart','ChartController::columnChart',['as' => 'columnChart']);
    $routes->get('line-chart','ChartController::lineChart',['as' => 'lineChart']);
    $routes->get('pie-chart','ChartController::pieChart',['as' => 'pieChart']);
});

$routes->group('components-page', function($routes) {
    $routes->get('alert','ComponentsPageController::alert',['as' => 'alert']);
    $routes->get('avatar','ComponentsPageController::avatar',['as' => 'avatar']);
    $routes->get('badges','ComponentsPageController::badges',['as' => 'badges']);
    $routes->get('button','ComponentsPageController::button',['as' => 'button']);
    $routes->get('calendar','ComponentsPageController::calendar',['as' => 'calendar']);
    $routes->get('card','ComponentsPageController::card',['as' => 'card']);
    $routes->get('carousel','ComponentsPageController::carousel',['as' => 'carousel']);
    $routes->get('colors','ComponentsPageController::colors',['as' => 'colors']);
    $routes->get('dropdown','ComponentsPageController::dropdown',['as' => 'dropdown']);
    $routes->get('image-upload','ComponentsPageController::imageUpload',['as' => 'imageUpload']);
    $routes->get('list','ComponentsPageController::list',['as' => 'list']);
    $routes->get('pagination','ComponentsPageController::pagination',['as' => 'pagination']);
    $routes->get('progress','ComponentsPageController::progress',['as' => 'progress']);
    $routes->get('radio','ComponentsPageController::radio',['as' => 'radio']);
    $routes->get('star-rating','ComponentsPageController::starRating',['as' => 'starRating']);
    $routes->get('switch','ComponentsPageController::switch',['as' => 'switch']);
    $routes->get('tabs','ComponentsPageController::tabs',['as' => 'tabs']);
    $routes->get('tags','ComponentsPageController::tags',['as' => 'tags']);
    $routes->get('tooltip','ComponentsPageController::tooltip',['as' => 'tooltip']);
    $routes->get('typography','ComponentsPageController::typography',['as' => 'typography']);
    $routes->get('videos','ComponentsPageController::videos',['as' => 'videos']);
});

$routes->group('crypto-currency', function($routes) {
    $routes->get('wallet','CryptocurrencyController::wallet',['as' => 'wallet']);
});

$routes->group('forms', function($routes) {
    $routes->get('form','FormsController::form',['as' => 'form']);
    $routes->get('form-layout','FormsController::formLayout',['as' => 'formLayout']);
    $routes->get('form-validation','FormsController::formValidation',['as' => 'formValidation']);
    $routes->get('wizard','FormsController::wizard',['as' => 'wizard']);
});    

$routes->group('invoice', function($routes) {
    $routes->get('invoice-add','InvoiceController::invoiceAdd',['as' => 'invoiceAdd']);
    $routes->get('invoice-edit','InvoiceController::invoiceEdit',['as' => 'invoiceEdit']);
    $routes->get('invoice-list','InvoiceController::invoiceList',['as' => 'invoiceList']);
    $routes->get('invoice-preview','InvoiceController::invoicePreview',['as' => 'invoicePreview']);
});    

$routes->group('settings', function($routes) {
    $routes->get('company','SettingsController::company',['as' => 'company']);
    $routes->get('currencies','SettingsController::currencies',['as' => 'currencies']);
    $routes->get('language','SettingsController::language',['as' => 'language']);
    $routes->get('notification','SettingsController::notification',['as' => 'notification']);
    $routes->get('notification-alert','SettingsController::notificationAlert',['as' => 'notificationAlert']);
    $routes->get('payment-gateway','SettingsController::paymentGateway',['as' => 'paymentGateway']);
    $routes->get('theme','SettingsController::theme',['as' => 'theme']);
});

$routes->group('table', function($routes) {
    $routes->get('table-basic','TableController::tableBasic',['as' => 'tableBasic']);
    $routes->get('table-data','TableController::tableData',['as' => 'tableData']);
});

$routes->group('users', function($routes) {
    $routes->get('add-user','UsersController::addUser',['as' => 'addUser']);
    $routes->get('users-grid','UsersController::usersGrid',['as' => 'usersGrid']);
    $routes->get('users-list','UsersController::usersList',['as' => 'usersList']);
    $routes->get('view-profile','UsersController::viewProfile',['as' => 'viewProfile']);
});

$routes->group('home', function($routes) {
    $routes->get('calendar-main','HomeController::calendarMain',['as' => 'calendarMain']);
    $routes->get('chat-empty','HomeController::chatEmpty',['as' => 'chatEmpty']);
    $routes->get('chat-message','HomeController::chatMessage',['as' => 'chatMessage']);
    $routes->get('chat-profile','HomeController::chatProfile',['as' => 'chatProfile']);
    $routes->get('email','HomeController::email',['as' => 'email']);
    $routes->get('faq','HomeController::faq',['as' => 'faq']);
    $routes->get('gallery','HomeController::gallery',['as' => 'gallery']);
    $routes->get('image-upload','HomeController::imageUpload',['as' => 'imageUpload']);
    $routes->get('kanban','HomeController::kanban',['as' => 'kanban']);
    $routes->get('page-error','HomeController::pageError',['as' => 'pageError']);
    $routes->get('pricing','HomeController::pricing',['as' => 'pricing']);
    $routes->get('starred','HomeController::starred',['as' => 'starred']);
    $routes->get('terms-condition','HomeController::termsCondition',['as' => 'termsCondition']);
    $routes->get('view-details','HomeController::viewDetails',['as' => 'viewDetails']); // fixed typo
    $routes->get('widgets','HomeController::widgets',['as' => 'widgets']);
});

// --------------------------------------------------------------------
// Environment Specific Routing
// --------------------------------------------------------------------
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
