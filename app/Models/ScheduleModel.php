<?php
namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model
{   
    protected $table            = 'schedules'; // kết nối ScheduleModel với bảng 'schedules'
    protected $primaryKey       = 'id';
    

    // các trường có thể chèn hoặc cập nhật
    protected $allowedFields    = [
        'movie_id', 
        'room_id', 
        'start_time', 
        'end_time', 
        'price'
    ];

    // Bật tính năng sử dụng timestamps (created_at, updated_at) nếu bảng có
    // protected $useTimestamps = true; 
}