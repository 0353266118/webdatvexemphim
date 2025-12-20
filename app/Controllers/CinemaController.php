<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class CinemaController extends ResourceController
{
    
    protected $modelName = 'App\Models\CinemaModel';
    protected $format    = 'json';

    // Xử lý: GET /cinemas lấy danh sách tất cả rạp chiếu
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Xử lý: GET /cinemas/{id} để xem chi tiết một rạp chiếu
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound('Không tìm thấy rạp chiếu.');
        }
        return $this->respond($data);
    }
}