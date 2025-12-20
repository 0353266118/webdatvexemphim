<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run()
    {
        // Dữ liệu phim mẫu
        $data = [
            [   'id'       => 1,
                'title' => 'Avengers: Endgame',
                'description' => 'Phần cuối của series Avengers...',
                'duration_minutes' => 181,
                'release_date' => '2019-04-26',
                'poster_url' => '/avengers.jpg',
                'status' => 'now_showing'
            ],
            [   'id'       => 2,
                'title' => 'Spider-Man: No Way Home',
                'description' => 'Peter Parker đối mặt với đa vũ trụ...',
                'duration_minutes' => 148,
                'release_date' => '2021-12-17',
                'poster_url' => '/spiderman.jpg',
                'status' => 'now_showing'
            ],
            [   'id'       => 3,
                'title' => 'Dune: Part Two',
                'description' => 'Hành trình của Paul Atreides trên Arrakis...',
                'duration_minutes' => 166,
                'release_date' => '2024-03-01',
                'poster_url' => '/dune2.jpg',
                'status' => 'coming_soon'
            ]
        ];

        // Dùng Query Builder để chèn dữ liệu
        foreach ($data as $movie) {
            $this->db->table('movies')->insert($movie);
        }
    }
}
