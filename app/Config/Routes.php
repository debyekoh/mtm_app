<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index');


$routes->get('/dmf_dashboards', 'DiesManufacturingController\Dashboards::index');
$routes->get('/dmf_assy_set', 'DiesManufacturingController\AssySet::index');
$routes->get('/dmf_part', 'DiesManufacturingController\Part::index');
$routes->get('/dmf_consumable', 'DiesManufacturingController\Consumable::index');
$routes->get('/dmf_create_new_standar', 'DiesManufacturingController\Create::index');
