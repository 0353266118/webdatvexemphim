<?php

namespace App\Models;

use CodeIgniter\Model;

// kế thừa từ Model của CodeIgniter
class MovieModel extends Model
{
    protected $table = 'movies'; // kết nối  MovieModel liên kết với bảng 'movies'
    protected $primaryKey = 'id'; // chỉ định khóa chính



    protected $allowedFields = [
        'title',
        'description',
        'duration_minutes',
        'release_date',
        'poster_url',
        'status'
    ]; // liệt kê các trường có thể chèn hoặc cập nhật
}

