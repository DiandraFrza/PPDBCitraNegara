<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('admin/dashboard', 'admin\Admincontroller::dashboard');
$routes->get('admin/list_admin', 'admin\Admincontroller::list_admin');
$routes->get('admin/data_pndftaran', 'admin\Admincontroller::data_pndftaran');
// LOGIN Validasi Admin
$routes->get('admin/create', 'admin\Admincontroller::create');
$routes->post('admin/store', 'admin\Admincontroller::store');
$routes->get('admin/login', 'admin\Admincontroller::login');
$routes->post('admin/attemptLogin', 'admin\Admincontroller::attemptLogin');

// PPDB Siswa
$routes->get('ppdb_siswa', 'ppdb\PpdbSiswaController::index');  // Untuk daftar siswa terdaftar
$routes->get('ppdb_siswa/create', 'ppdb\PpdbSiswaController::create'); // Form pendaftaran
$routes->get('ppdb_siswa/daftar', 'ppdb\PpdbSiswaController::daftar'); // Form pendaftaran
$routes->post('ppdb_siswa/store', 'ppdb\PpdbSiswaController::store');  // Simpan data siswa baru
$routes->post('ppdb_siswa/daftar', 'ppdb\PpdbSiswaController::daftar');  // Simpan data siswa baru
$routes->get('ppdb_siswa/list_siswa', 'ppdb\PpdbSiswaController::list_siswa');

// Print Data Table Siswa 
$routes->get('ppdb_siswa/export_pdf', 'ppdb\PpdbSiswaController::export_pdf');
$routes->get('ppdb_siswa/export_excel', 'ppdb\PpdbSiswaController::export_excel');
