<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CinemaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'     => 'CGV Vincom Center',
                'location' => '54A Nguyễn Chí Thanh, Đống Đa, Hà Nội',
            ],
            [
                'name'     => 'Lotte Cinema Thăng Long',
                'location' => 'Tầng 3, Big C Thăng Long, Cầu Giấy, Hà Nội',
            ],
        ];

        // Dùng Query Builder để chèn dữ liệu
        $this->db->table('cinemas')->insertBatch($data);
    }
}