<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');

$routes->add('login-resident', 'AuthenticationController::login');

$routes->group('', ['filter' => 'LoginFilter'], function ($routes) {
    $routes->get('welcome-resident', 'LoggedResidentController::loggedResident');
    $routes->get('welcome-admin', 'dashboardcontroller::dashboard');
    $routes->get('manage-resident', 'residentcontroller::resident');
});
