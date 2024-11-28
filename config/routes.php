<?php

use App\Controller\PatientController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/', [
    '_controller' => 'App\Controller\HomeController::index'
]));

$routes->add('patients_index', new Route('/patients', [
    '_controller' => 'App\Controller\PatientController::index'
]));

$routes->add('patients_create', new Route('/patients/create', [
    '_controller' => 'App\Controller\PatientController::create'
]));

$routes->add('patients_store', new Route('/patients/store', [
    '_controller' => 'App\Controller\PatientController::store'
]));

$routes->add('patients_edit', new Route('/patients/edit/{id}', [
    '_controller' => 'App\Controller\PatientController::edit'
]));

$routes->add('patients_update', new Route('/patients/update/{id}', [
    '_controller' => 'App\Controller\PatientController::update'
]));

$routes->add('patients_delete', new Route('/patients/delete/{id}', [
    '_controller' => 'App\Controller\PatientController::destroy'
]));

return $routes;
