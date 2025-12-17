<?php
// File: app/Controllers/MovieController.php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class MovieController extends ResourceController
{
    /**
     * Tên của Model sẽ được sử dụng
     * @var string
     */
    protected $modelName = 'App\Models\MovieModel';

    /**
     * Định dạng response mặc định
     * @var string
     */
    protected $format    = 'json';

    /**
     * Hàm này xử lý yêu cầu: GET /movies
     * Trả về một danh sách các phim
     */
    public function index()
    {
        // Lấy tất cả dữ liệu từ Model (tương đương "SELECT * FROM movies")
        $movies = $this->model->findAll();

        // Trả về dữ liệu dưới dạng JSON
        return $this->respond($movies);
    }

    /**
     * Hàm này xử lý yêu cầu: GET /movies/{id}
     * Ví dụ: /movies/1
     * Trả về chi tiết của một phim
     */
    public function show($id = null)
    {
        // Tìm phim trong database dựa trên ID
        $movie = $this->model->find($id);

        if ($movie) {
            // Nếu tìm thấy, trả về dữ liệu phim đó
            return $this->respond($movie);
        }

        // Nếu không tìm thấy, trả về lỗi 404 Not Found
        return $this->failNotFound('Không tìm thấy bộ phim với ID: ' . $id);
    }
}