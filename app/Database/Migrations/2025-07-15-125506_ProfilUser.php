<?php

namespace App\Database\Migrations;

use CodeIgniter\Commands\Database\CreateDatabase;
use CodeIgniter\Database\Migration;

class ProfilUser extends Migration
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
            'id_user' =>[
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'nama_lengkap' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'agama' => [
                'type' => 'ENUM',
                'constraint' => ['Islam','Protestan','Katolik','Budha', 'Hindu','Konghucu'],
                'default' => 'Islam',
            ],
            'nomor_hp' =>[
                'type' => 'VARCHAR',
                'constraint' => 14,
            ],
            'tanggal_lahir' =>[
                'type' => 'DATE',
            ],
            'status_pernikahan'  =>[
                'type' => 'ENUM',
                'constraint' => ['Lajang','Duda','Janda'],
                'default' => 'Lajang',
            ],
            'sedia_menikah' =>[
                'type' => 'ENUM',
                'constraint' => ['Bersedia', 'Tidak Bersedia'],
                'default' => 'Tidak Bersedia'
            ],
            'pekerjaan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'penghasilan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pendidikan_terakhir' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'sedia_poligami' => [
                'type' => 'ENUM',
                'constraint' => ['Bersedia', 'Tidak Bersedia'],
                'default' => 'Tidak Bersedia'
            ],
            'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ], 
            'kabupaten' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ], 
            'kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ], 
            'desa' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ], 
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pemahaman_agama' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'gambaran_fisik' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'kebiasaan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'pertanyaan_khusus' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],


            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        $this->forge->addkey('id',TRUE);
        $this->forge->addForeignKey('id_user','users','id','CASCADE','CASCADE');
        $this->forge->createTable('bio_user');
    }

    public function down()
    {
        //
    }
}
