<?php

// use CodeIgniter\Router\RouteCollection;

// /**
//  * @var RouteCollection $routes
//  */
// $routes->get('/', 'Home::index');

// // Tu van routes
// $routes->group('tuvan', function($routes) {
//     $routes->get('/', 'TuVanController::index');
//     $routes->post('process', 'TuVanController::process');
//     $routes->get('full-results', 'TuVanController::fullResults');
// });
// $routes->get('thongke', 'ThongKeController::index');
// $routes->get('thongke/detail/(:num)', 'ThongKeController::detail/$1');

// $routes->get('nganh', 'NganhController::index');
// // Fallback route
// $routes->get('(:any)', 'TuVanController::index');
// $routes->resource('movies', ['controller' => 'MovieController']);


namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*
 * --------------------------------------------------------------------
 * Route Definitions for Movie & Schedule Service
 * --------------------------------------------------------------------
 */

// Route mặc định, có thể dùng để kiểm tra service có hoạt động không
$routes->get('/', static function () {
    return response()->setJSON(['status' => 'success', 'message' => 'Movie & Schedule Service is running.']);
});

// === API Routes for Movies ===
// Dòng này sẽ tự động tạo các route:
// GET /movies -> MovieController::index() (Lấy danh sách)
// GET /movies/(:num) -> MovieController::show($1) (Lấy chi tiết)
// POST /movies -> MovieController::create() (Tạo mới)
// PUT /movies/(:num) -> MovieController::update($1) (Cập nhật)
// DELETE /movies/(:num) -> MovieController::delete($1) (Xóa)
$routes->resource('movies', ['controller' => 'MovieController']);


// === API Routes for Schedules (Em sẽ làm sau) ===
// Ví dụ:
// GET /schedules/movie/(:num) -> Lấy toàn bộ lịch chiếu của một phim
// $routes->get('schedules/movie/(:num)', 'ScheduleController::getByMovieId/$1');

// GET /schedules/(:num) -> Lấy chi tiết một suất chiếu
// $routes->get('schedules/(:num)', 'ScheduleController::show/$1');