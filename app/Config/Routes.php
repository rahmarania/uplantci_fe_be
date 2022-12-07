<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// bikin db
$routes->get('create-db', function () {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('uplant')) {
        echo 'Database created!';
    }
});

$routes->resource('api');

// web pertama kali dibuka lgsng ke halaman user
$routes->get('/', 'BerandaWeb::noLogin');
$routes->get('beranda/index', 'BerandaWeb::index');
$routes->get('beranda/noLogin', 'BerandaWeb::noLogin');
$routes->get('beranda/about', 'BerandaWeb::about');
$routes->get('beranda/home', 'BerandaWeb::noLogin');
$routes->get('beranda/acara', 'BerandaWeb::acara');
$routes->get('beranda/artikel', 'BerandaWeb::artikel');
$routes->get('beranda/kontak', 'BerandaWeb::kontak');

$routes->get('beranda/aboutLog', 'BerandaWeb::aboutLog');
$routes->get('beranda/homeLog', 'BerandaWeb::noLoginLog');
$routes->get('beranda/acaraLog', 'BerandaWeb::acaraLog');
$routes->get('beranda/artikelLog', 'BerandaWeb::artikelLog');
$routes->get('beranda/kontakLog', 'BerandaWeb::kontakLog');
$routes->get('beranda/komunitas', 'BerandaWeb::komunitas');
$routes->get('beranda/detailItem/(:segment)', 'Tanaman::detailItem/$1');
$routes->get('beranda/detailItemLog/(:segment)', 'Tanaman::detailItemLog/$1');


// ke login
$routes->get('auth/index', 'Auth::index');
$routes->get('auth/index2', 'Auth::index2');
$routes->get('auth/loginUser', 'Auth::loginUser');
$routes->post('auth/loginUser', 'Auth::loginUser');
$routes->get('auth/loginAdmin', 'Auth::loginAdmin');
$routes->post('auth/loginAdmin', 'Auth::loginAdmin');
$routes->post('auth/registerStores', 'Auth::registerStores');
$routes->post('auth/loginAdminStores', 'Auth::loginAdminStores');
$routes->get('auth/register', 'Auth::register');
$routes->post('auth/register', 'Auth::register');
$routes->get('auth/logoutUser', 'Auth::logoutUser');
$routes->get('auth/logoutAdmin', 'Auth::logoutAdmin');


$routes->get('userroles', 'userroles::index');

// ini d folder controller
// $routes->get('/', 'Home::index');


// $routes->addRedirect('/','home');

$routes->get('home', 'home::index');

// tambah routes baru ke fungsi index tanaman.php
$routes->get('tanaman', 'Tanaman::index');
$routes->get('pie_chart', 'Chart::pie_chart_js');

// menuju tambah.php func create
$routes->get('tanaman/tambah', 'Tanaman::create');

// di tanaman panggil method store utk add data, method form nya post
$routes->post('tanaman', 'Tanaman::store');

// variabel 1 (satu) buat any
$routes->get('tanaman/edit/(:any)', 'Tanaman::edit/$1');
$routes->put('tanaman/(:segment)', 'Tanaman::update/$1');

// delete func destroy di controller
$routes->delete('tanaman/(:segment)', 'Tanaman::destroy/$1');

// export excel
$routes->get('tanaman/exportexc', 'Tanaman::exportexc');

// export pdf
$routes->get('tanaman/exportpdf', 'Tanaman::exportpdf');

// import excel
$routes->post('tanaman/import', 'Tanaman::import');
$routes->post('tanaman/impexc', 'Tanaman::impexc');


$routes->post('chart-perkat', 'Tanaman::show_perkat');

// user routes
$routes->get('users', 'User::index');
$routes->delete('users/(:segment)', 'User::destroy/$1');

// komunitas routes
$routes->get('komunitas', 'Komunitas::index');
$routes->get('komunitas/edit/(:any)', 'Komunitas::editkom/$1');
$routes->put('komunitas/(:segment)', 'Komunitas::updatekom/$1');
$routes->delete('komunitas/(:segment)', 'Komunitas::destroy/$1');
$routes->get('komunitas/tambah', 'Komunitas::create');
$routes->post('komunitas', 'Komunitas::store');
// $routes->get('komunitasweb', 'Komunitas::indexweb');

// artikel routes
$routes->get('artikel', 'Artikel::index');
$routes->get('artikel/edit/(:any)', 'Artikel::editar/$1');
$routes->put('artikel/(:segment)', 'Artikel::updatear/$1');
$routes->post('artikel/(:segment)', 'Artikel::updatear/$1');
$routes->delete('artikel/(:segment)', 'Artikel::destroy/$1');
$routes->get('artikel/tambah', 'Artikel::create');
$routes->post('artikel', 'Artikel::store');
$routes->get('artikeluser', 'Artikel::indexuser');
$routes->get('artikelLog', 'Artikel::indexuserLog');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
