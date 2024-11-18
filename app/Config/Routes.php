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
// CRUD untuk Siswa di Admin
// CRUD untuk Siswa di Admin
$routes->get('admin/data_pndftaran/tambah', 'Admin\AdminController::tambahSiswa');
$routes->post('admin/data_pndftaran/simpan', 'Admin\AdminController::simpanSiswa');
$routes->get('admin/data_pndftaran/edit/(:num)', 'Admin\AdminController::editSiswa/$1');
$routes->post('admin/data_pndftaran/update/(:num)', 'Admin\AdminController::updateSiswa/$1');
$routes->get('admin/data_pndftaran/hapus/(:num)', 'Admin\AdminController::hapusSiswa/$1');



// PPDB Siswa
$routes->get('user/ppdb_siswa', 'ppdb\PpdbSiswaController::index');  // Untuk daftar siswa terdaftar
$routes->get('user/ppdb_siswa/create', 'ppdb\PpdbSiswaController::create'); // Form pendaftaran
$routes->get('user/ppdb_siswa/daftar', 'ppdb\PpdbSiswaController::daftar'); // Form pendaftaran
$routes->post('user/ppdb_siswa/store', 'ppdb\PpdbSiswaController::store');  // Simpan data siswa baru
$routes->post('user/ppdb_siswa/daftar', 'ppdb\PpdbSiswaController::daftar');  // Simpan data siswa baru
$routes->get('user/ppdb_siswa/list_siswa', 'ppdb\PpdbSiswaController::list_siswa');

// Print Data Table Siswa 
$routes->get('user/ppdb_siswa/export_pdf', 'ppdb\PpdbSiswaController::export_pdf');
$routes->get('user/ppdb_siswa/export_excel', 'ppdb\PpdbSiswaController::export_excel');
