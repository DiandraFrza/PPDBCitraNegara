<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('admin/index', 'AdminController::index');
$routes->get('admin/create', 'AdminController::create');
$routes->get('admin/login', 'AdminController::login');
$routes->post('admin/store', 'AdminController::store');
$routes->get('admin', 'AdminController::dashboard');

$routes->get('admin/login', 'AdminController::login');
$routes->post('admin/attemptLogin', 'AdminController::attemptLogin');
$routes->get('admin/dashboard', 'AdminController::dashboard'); // Tanpa middleware

$routes->get('ppdb_siswa', 'PpdbSiswaController::index');  // Untuk daftar siswa terdaftar
$routes->get('ppdb_siswa/create', 'PpdbSiswaController::create'); // Form pendaftaran
$routes->get('ppdb_siswa/daftar', 'PpdbSiswaController::daftar'); // Form pendaftaran
$routes->post('ppdb_siswa/store', 'PpdbSiswaController::store');  // Simpan data siswa baru
$routes->post('ppdb_siswa/daftar', 'PpdbSiswaController::daftar');  // Simpan data siswa baru

$routes->get('ppdb_siswa/list_siswa', 'PpdbSiswaController::list_siswa');

$routes->get('ppdb_siswa/export_pdf', 'PpdbSiswaController::export_pdf');
$routes->get('ppdb_siswa/export_excel', 'PpdbSiswaController::export_excel');
