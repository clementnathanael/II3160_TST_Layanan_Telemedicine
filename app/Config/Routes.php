<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/about', 'About::index');
// $routes->get('/blog', 'Blog::index');
// $routes->get('/department', 'DepartmentController::index');
// $routes->get('/departmentAPI', 'DepartmentController::API');
// $routes->get('/queryAPI', 'CustomerControllerQuery::queryAPI');
// $routes->get('/queryAPI/(:any)', 'CustomerControllerQuery::queryAPIParam/$1/$2');
// $routes->get('/coba', 'CobaInsert::index');
// $routes->post('/coba/inputDataCoba', 'CobaInsert::inputDataCoba');
// $routes->get('/cobaUpdate', 'Coba_update::index');
// $routes->post('/cobaUpdate/updateDataCoba', 'Coba_update::updateDataCoba');
// $routes->get('/cobaDelete', 'Coba_delete::index');
// $routes->post('/cobaDelete/deleteDataCoba', 'Coba_delete::deleteDataCoba');
// $routes->get('/login', 'UserController::login');
// $routes->post('/loginUser', 'UserController::loginUser');
$routes->get('/login', 'Telemed_AuthController::login');
$routes->post('/auth/loginProcess', 'Telemed_AuthController::loginProcess');
$routes->get('/admin/dashboard', 'Telemed_AuthController::adminDashboard');
$routes->get('/admin/logout', 'Telemed_AuthController::logout');
$routes->match(['get', 'post'], '/register', 'Telemed_AuthController::register');
$routes->get('/admin/manage-users', 'Telemed_AuthController::manageUsers');
$routes->get('/signup', 'Telemed_SignupController::index');
$routes->post('/signup', 'Telemed_SignupController::register');
$routes->get('/admin/edit-user/(:num)', 'Telemed_AdminController::editUser/$1');
$routes->post('/admin/update-user/(:num)', 'Telemed_AdminController::updateUser/$1');
$routes->get('/admin/delete-user/(:num)', 'Telemed_AdminController::deleteUser/$1');
$routes->get('/patient/dashboard', 'Telemed_PatientController::dashboard');
$routes->get('/doctor/dashboard', 'Telemed_DoctorController::dashboard');
$routes->get('/doctor/add-schedule', 'Telemed_DoctorController::showAddScheduleForm');
$routes->post('/doctor/add-schedule', 'Telemed_DoctorController::addSchedule');


// Rute untuk dashboard pasien
$routes->get('/patient/dashboard', 'Telemed_PatientController::dashboard');

// Rute untuk form tambah pasien
$routes->get('/patient/add-patient', 'Telemed_PatientController::addPatientForm');

// Rute untuk menyimpan data pasien
$routes->post('/patient/save-patient', 'Telemed_PatientController::savePatient');

// Rute untuk profil pasien
$routes->get('/patient/profile', 'Telemed_PatientController::viewProfile');
$routes->get('/patient/history', 'Telemed_PatientController::viewHistory');
$routes->get('patient/booking', 'Telemed_BookingController::index');
$routes->post('patient/booking/create', 'Telemed_BookingController::create');
$routes->get('/doctor/add-profile', 'Telemed_DataDokterController::index');
$routes->post('/doctor/save', 'Telemed_DataDokterController::save');







