<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ScheduleModel;

class ScheduleController extends ResourceController
{   
    // kiểu dữ liệu trả về là JSON
    protected $format = 'json';

    public function getByMovieId($movieId = null) // hàm lấy danh sách lịch chiếu cụ thể 1 phim
    {   
        // kiểm tra ID đầu vào
        if ($movieId === null) {
            return $this->fail('Yêu cầu cung cấp ID của phim.', 400); // 400 = Bad Request
        }

        $model = new ScheduleModel(); // khởi tạo đối tượng model lịch chiếu

        // Sử dụng Query Builder để tạo câu lệnh JOIN phức tạp
        $schedules = $model
            ->select('schedules.id, schedules.start_time, schedules.price, rooms.name as room_name, cinemas.name as cinema_name, cinemas.location')
            ->join('rooms', 'rooms.id = schedules.room_id')
            ->join('cinemas', 'cinemas.id = rooms.cinema_id')
            ->where('schedules.movie_id', $movieId)
            // ->where('schedules.start_time >=', date('Y-m-d H:i:s')) // Tùy chọn: chỉ lấy các suất chiếu trong tương lai
            ->orderBy('schedules.start_time', 'ASC') // Sắp xếp theo thời gian bắt đầu
            ->findAll();

        if (empty($schedules)) {
            // Trả về thông báo nếu phim không có lịch chiếu
            return $this->respond([]); // Trả về một mảng JSON rỗng
        }

        return $this->respond($schedules);
    }


    public function show($id = null) // hàm lấy chi tiết 1 suất chiếu theo id
    {
        $model = new ScheduleModel(); // khởi tạo đối tượng midel lịch chiếu
        $schedule = $model->find($id); // tìm suất chiếu theo id schedule
        if ($schedule) {
            return $this->respond($schedule);
        }

        return $this->failNotFound('Không tìm thấy suất chiếu với ID: ' . $id);
    }
}