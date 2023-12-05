<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Attendance;
use Illuminate\Support\Facades\Schema;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Attendance::truncate();
        Schema::enableForeignKeyConstraints();

        $data = ([
            [
                'id_absensi' => 'MATDIS',
                'tanggal' => '2023-12-01',
                'waktu' => '08:00:00',
                'status_absensi' => 'Hadir',
                'student_id' => 1,
                'class_id' => 3,
                'dosen_id' => 1,
                'matkul_id' => 1,
            ],
            [
                'id_absensi' => 'DIP',
                'tanggal' => '2023-12-01',
                'waktu' => '08:00:00',
                'status_absensi' => 'Hadir',
                'student_id' => 2,
                'class_id' => 3,
                'dosen_id' => 2,
                'matkul_id' => 2,
            ],
            [
                'id_absensi' => 'SIM',
                'tanggal' => '2023-12-01',
                'waktu' => '08:00:00',
                'status_absensi' => 'Hadir',
                'student_id' => 3,
                'class_id' => 3,
                'dosen_id' => 3,
                'matkul_id' => 3,
            ],
            [
                'id_absensi' => 'PBO',
                'tanggal' => '2023-12-01',
                'waktu' => '08:00:00',
                'status_absensi' => 'Hadir',
                'student_id' => 4,
                'class_id' => 3,
                'dosen_id' => 4,
                'matkul_id' => 4,
            ],
            [
                'id_absensi' => 'K3',
                'tanggal' => '2023-12-01',
                'waktu' => '08:00:00',
                'status_absensi' => 'Hadir',
                'student_id' => 5,
                'class_id' => 3,
                'dosen_id' => 6,
                'matkul_id' => 5,
            ],
            [
                'id_absensi' => 'BASDAT',
                'tanggal' => '2023-12-01',
                'waktu' => '08:00:00',
                'status_absensi' => 'Hadir',
                'student_id' => 6,
                'class_id' => 3,
                'dosen_id' => 5,
                'matkul_id' => 6,
            ],
            [
                'id_absensi' => 'JARKOM',
                'tanggal' => '2023-12-01',
                'waktu' => '08:00:00',
                'status_absensi' => 'Hadir',
                'student_id' => 7,
                'class_id' => 3,
                'dosen_id' => 7,
                'matkul_id' => 7,
            ],
            [
                'id_absensi' => 'PWEB2',
                'tanggal' => '2023-12-01',
                'waktu' => '08:00:00',
                'status_absensi' => 'Hadir',
                'student_id' => 8,
                'class_id' => 3,
                'dosen_id' => 8,
                'matkul_id' => 8,
            ],
            [
                'id_absensi' => 'SISOP',
                'tanggal' => '2023-12-01',
                'waktu' => '08:00:00',
                'status_absensi' => 'Hadir',
                'student_id' => 9,
                'class_id' => 3,
                'dosen_id' => 9,
                'matkul_id' => 9,
            ],
            [
                'id_absensi' => 'RPL',
                'tanggal' => '2023-12-01',
                'waktu' => '08:00:00',
                'status_absensi' => 'Hadir',
                'student_id' => 10,
                'class_id' => 3,
                'dosen_id' => 10,
                'matkul_id' => 10,
            ],
        ]);

        foreach ($data as $value) {
            Attendance::insert([
                'id_absensi' => $value['id_absensi'],
                'tanggal' => $value['tanggal'],
                'waktu' => $value['waktu'],
                'status_absensi' => $value['status_absensi'],
                'student_id' => $value['student_id'],
                'class_id' => $value['class_id'],
                'dosen_id' => $value['dosen_id'],
                'matkul_id' => $value['matkul_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
