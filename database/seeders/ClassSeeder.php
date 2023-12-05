<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\ClassRoom;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        $data = ([
            [
                'kode_kelas' => 'CS2A',
                'nama_kelas' => 'TI 2A',
                'dosen_id' => 1,
            ],
            [
                'kode_kelas' => 'IT2B',
                'nama_kelas' => 'TI 2B',
                'dosen_id' => 2,
            ],
            [
                'kode_kelas' => 'SE2C',
                'nama_kelas' => 'TI 2C',
                'dosen_id' => 3,
            ],
            [
                'kode_kelas' => 'SE3D',
                'nama_kelas' => 'TI 2D',
                'dosen_id' => 4,
            ],
        ]);

        foreach ($data as $value) {
            ClassRoom::insert([
                'kode_kelas' => $value['kode_kelas'],
                'nama_kelas' => $value['nama_kelas'],
                'dosen_id' => $value['dosen_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
