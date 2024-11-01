<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/ppdb_siswa', 'PpdbSiswaController::index');  // Untuk daftar siswa terdaftar
$routes->get('/ppdb_siswa/create', 'PpdbSiswaController::create'); // Form pendaftaran
$routes->get('/ppdb_siswa/daftar', 'PpdbSiswaController::daftar'); // Form pendaftaran
$routes->post('/ppdb_siswa/store', 'PpdbSiswaController::store');  // Simpan data siswa baru
