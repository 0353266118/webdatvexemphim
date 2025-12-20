<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Các phòng của rạp CGV (cinema_id = 1)
            [
                'cinema_id'   => 1,
                'name'        => 'Phòng 1',
                'total_seats' => 120,
            ],
            [
                'cinema_id'   => 1,
                'name'        => 'Phòng 2 (IMAX)',
                'total_seats' => 200,
            ],
            // Các phòng của rạp Lotte (cinema_id = 2)
            [
                'cinema_id'   => 2,
                'name'        => 'Phòng A',
                'total_seats' => 100,
            ],
            [
                'cinema_id'   => 2,
                'name'        => 'Phòng B',
                'total_seats' => 100,
            ],
        ];

        $this->db->table('rooms')->insertBatch($data);
    }
}