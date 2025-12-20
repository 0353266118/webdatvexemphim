<?php
// File: app/Controllers/MovieController.php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class MovieController extends ResourceController
{

    protected $modelName = 'App\Models\MovieModel';
    // kết nối MovieController với MovieModel

    protected $format    = 'json';
    // ra lệnh cho controller trả về dữ liệu ở định dạng JSON

    // hàm trả về danh sách tất cả phim
    public function index()
    {
        // Lấy đối tượng request thông qua hàm service()
        $request = service('request');

        // Lấy tham số 'status' từ query string
        $status = $request->getGet('status');

        if ($status === 'now_showing' || $status === 'coming_soon') {
            $movies = $this->model->where('status', $status)->findAll(); // khởi tạo Model movie
        } else {
            $movies = $this->model->findAll();
        }

        // Trả về danh sách phim dưới dạng JSON
        return $this->respond($movies);
    }


    // hàm trả về chi tiết 1 phim dựa trên ID
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