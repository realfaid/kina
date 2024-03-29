<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('vypis_filmu', 'Home::vypis_filmu');
$routes->get('vypis_salu', 'Home::vypis_salu');
$routes->get('vypis_vstupenek', 'Home::vypis_vstupenek');
$routes->get('pridat_film', 'Home::pridat_film');
$routes->get('pridat_sal', 'Home::pridat_sal');
$routes->get('pridat_vstupenku', 'Home::pridat_vstupenku');
$routes->post('zapsat', 'Home::zapsat');
$routes->post('zapsatSal', 'Home::zapsatSal');
$routes->post('zapsatVstupenku', 'Home::zapsatVstupenku');
$routes->get('uprava/(:num)','Home::uprava/$1');
$routes->get('upravaSalu/(:num)','Home::upravaSalu/$1');
$routes->get('upravaVstupenky/(:num)','Home::upravaVstupenky/$1');
$routes->put('zapsatUpravu/(:num)','Home::zapsatUpravu/$1');
$routes->get('smazat/(:num)','Home::smazat/$1');
$routes->get('smazatSal/(:num)','Home::smazatSal/$1');
$routes->get('smazatVstupenku/(:num)','Home::smazatVstupenku/$1');
$routes->put('zapsatUpravuSalu/(:num)','Home::zapsatUpravuSalu/$1');
$routes->put('zapsatUpravuVstupenky/(:num)','Home::zapsatUpravuVstupenky/$1');

$routes->group('auth', ['namespace' => 'IonAuth\Controllers'], function ($routes) {
	$routes->add('login', 'Auth::login');
	$routes->get('logout', 'Auth::logout');
	$routes->add('forgot_password', 'Auth::forgot_password');
	//$routes->add('login', 'Auth::login');
	$routes->add('create_user', 'Auth::create_user');
	//$routes->get('logout', 'Auth::logout');
	//$routes->add('forgot_password', 'Auth::forgot_password');
	// $routes->get('/', 'Auth::index');
	// $routes->add('create_user', 'Auth::create_user');
	// $routes->add('edit_user/(:num)', 'Auth::edit_user/$1');
	//$routes->add('create_group', 'Auth::create_group');
	// $routes->get('activate/(:num)', 'Auth::activate/$1');
	// $routes->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
	// $routes->add('deactivate/(:num)', 'Auth::deactivate/$1');
	// $routes->get('reset_password/(:hash)', 'Auth::reset_password/$1');
	// $routes->post('reset_password/(:hash)', 'Auth::reset_password/$1');
	// ...

});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
