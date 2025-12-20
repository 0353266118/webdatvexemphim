<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRemainingTables extends Migration
{
    public function up()
    {
        // --- 1. Tạo bảng cinemas ---
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'location'   => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('cinemas', true); // Thêm true để kiểm tra tồn tại

        // --- 2. Tạo bảng rooms ---
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'cinema_id'    => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'name'         => ['type' => 'VARCHAR', 'constraint' => 100],
            'total_seats'  => ['type' => 'INT', 'constraint' => 11, 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('cinema_id', 'cinemas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('rooms', true);

        // --- 3. Tạo bảng schedules ---
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'movie_id'   => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'room_id'    => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'start_time' => ['type' => 'DATETIME'],
            'end_time'   => ['type' => 'DATETIME'],
            'price'      => ['type' => 'DECIMAL', 'constraint' => '10,2'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('movie_id', 'movies', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('room_id', 'rooms', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('schedules', true);
    }

    public function down()
    {
        $this->forge->dropTable('schedules', true);
        $this->forge->dropTable('rooms', true);
        $this->forge->dropTable('cinemas', true);
    }
}