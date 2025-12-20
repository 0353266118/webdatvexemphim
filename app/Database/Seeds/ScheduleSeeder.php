<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Lịch chiếu cho phim "Avengers: Endgame" (movie_id = 1)
            [   'id'       => 1,
                'movie_id'   => 1,
                'room_id'    => 2, // Chiếu ở phòng IMAX của CGV
                'start_time' => '2025-12-25 19:00:00',
                'end_time'   => '2025-12-25 22:01:00',
                'price'      => 150000.00,
            ],
            [   'id'       => 2,
                'movie_id'   => 1,
                'room_id'    => 3, // Chiếu ở phòng A của Lotte
                'start_time' => '2025-12-25 20:30:00',
                'end_time'   => '2025-12-25 23:31:00',
                'price'      => 110000.00,
            ],
            // Lịch chiếu cho phim "Spider-Man: No Way Home" (movie_id = 2)
            [   'id'       => 3,
                'movie_id'   => 2,
                'room_id'    => 1, // Chiếu ở phòng 1 của CGV
                'start_time' => '2025-12-25 19:30:00',
                'end_time'   => '2025-12-25 21:58:00',
                'price'      => 120000.00,
            ],
        ];

        $this->db->table('schedules')->insertBatch($data);
    }
}