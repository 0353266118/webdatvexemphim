<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInitialTables extends Migration
{
    public function up()
    {
        // Tạo bảng movies
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title' => ['type' => 'VARCHAR', 'constraint' => 255],
            'description' => ['type' => 'TEXT', 'null' => true],
            'duration_minutes' => ['type' => 'INT', 'constraint' => 11, 'null' => true],
            'release_date' => ['type' => 'DATE', 'null' => true],
            'poster_url' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'status' => ['type' => 'VARCHAR', 'constraint' => 50]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('movies');

        // (Em có thể thêm các bảng cinemas, rooms, schedules tương tự ở đây)
        // Tạm thời chỉ cần bảng movies để test
    }

    public function down()
    {
        // Hàm này dùng để xóa bảng nếu cần rollback
        $this->forge->dropTable('movies');
    }
}
