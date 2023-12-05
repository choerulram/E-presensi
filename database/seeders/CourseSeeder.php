<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Course;
use Illuminate\Support\Facades\Schema;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Course::truncate();
        Schema::enableForeignKeyConstraints();
        
        $data = ([
            [
                'kode_matkul' => '230142',
                'nama_matkul' => 'Matematika Diskrit',
                'semester' => 'Semester 3',
                'sks' => '2',
            ],
            [
                'kode_matkul' => '231212',
                'nama_matkul' => 'Desain Interaksi Pengguna',
                'semester' => 'Semester 3',
                'sks' => '2',
            ],
            [
                'kode_matkul' => '230152',
                'nama_matkul' => 'Sistem Informasi Manajemen',
                'semester' => 'Semester 3',
                'sks' => '2',
            ],
            [
                'kode_matkul' => '230172',
                'nama_matkul' => 'Pemrograman Berorientasi Objek',
                'semester' => 'Semester 3',
                'sks' => '2',
            ],
            [
                'kode_matkul' => '230192',
                'nama_matkul' => 'Kesehatan Keselamatan Kerja (K3)',
                'semester' => 'Semester 3',
                'sks' => '2',
            ],
            [
                'kode_matkul' => '231182',
                'nama_matkul' => 'Praktikum Basis Data',
                'semester' => 'Semester 3',
                'sks' => '2',
            ],
            [
                'kode_matkul' => '231162',
                'nama_matkul' => 'Praktikum Jaringan Komputer',
                'semester' => 'Semester 3',
                'sks' => '2',
            ],
            [
                'kode_matkul' => '231202',
                'nama_matkul' => 'Praktikum Pemrograman Web 2',
                'semester' => 'Semester 3',
                'sks' => '2',
            ],
            [
                'kode_matkul' => '231222',
                'nama_matkul' => 'Praktikum Sistem Operasi',
                'semester' => 'Semester 3',
                'sks' => '2',
            ],
            [
                'kode_matkul' => '231232',
                'nama_matkul' => 'Praktikum Rekayasa Perangkat Lunak',
                'semester' => 'Semester 3',
                'sks' => '2',
            ],
        ]);

        foreach ($data as $value) {
            Course::insert([
                'kode_matkul' => $value['kode_matkul'],
                'nama_matkul' => $value['nama_matkul'],
                'semester' => $value['semester'],
                'sks' => $value['sks'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
