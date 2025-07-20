<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GambaranPisik extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_bio' =>[
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'tinggi_badan' =>[
                'type' => 'INT',
                'constraint' => 3,
            ],
            'berat_badan' =>[
                'type' => 'INT',
                'constraint' => 5,
            ],
            'warna_kulit' => [
                'type' => 'ENUM',
                'constraint' => ['Putih','Kuning Langsat','Sawo Matang','Gelap', 'Olive'],
                'default' => 'Kuning Langsat',
            ],
            'tipe_rambut' => [
                'type' => 'ENUM',
                'constraint' => ['Lurus','Bergelombang','Ikal','Keriting'],
                'default' => 'Lurus',
            ],
            'panjang_rambut' => [
                'type' => 'ENUM',
                'constraint' => ['Panjang','Pendek','Sedang'],
                'default' => 'Pendek',
            ],
            

            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        $this->forge->addkey('id',TRUE);
        $this->forge->addForeignKey('id_bio','bio_user','id','CASCADE','CASCADE');
        $this->forge->createTable('gambaran_fisik');
    }

    public function down()
    {
        //
    }
}
