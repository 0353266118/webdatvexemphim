<?php
namespace App\Models;
use CodeIgniter\Model;

class CinemaModel extends Model
{
    protected $table = 'cinemas'; // kết nối CinemaModel với bảng 'cinemas'
    protected $primaryKey = 'id';

    // các trường đưuợc phép chèn hoặc cập nhật
    protected $allowedFields = ['name', 'location'];
}