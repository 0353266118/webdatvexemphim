<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Gọi các Seeder theo đúng thứ tự phụ thuộc
        $this->call('MovieSeeder');
        $this->call('CinemaSeeder');
        $this->call('RoomSeeder');
        $this->call('ScheduleSeeder');
    }
}