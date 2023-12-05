<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Lecturer;
use Illuminate\Support\Facades\Schema;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Lecturer::truncate();
        Schema::enableForeignKeyConstraints();

        $data = ([
            [
                'nidn' => '0022088306',
                'nama' => 'Rostika Listyaningrum, S.Si., M.Si.',
                'alamat' => 'Jl. Contoh No. 123',
                'email' => 'li_sa007@pnc.ac.id',
                'no_hp' => '08123456789',
                'matkul_id' => 1,
            ],
            [
                'nidn' => '0621118402',
                'nama' => 'Lutfi Syafirullah, S.T., M.Kom.',
                'alamat' => 'Jl. Contoh No. 456',
                'email' => 'syafirullah.lutfi@gmail.com',
                'no_hp' => '08765432109',
                'matkul_id' => 2,
            ],
            [
                'nidn' => '0618038501',
                'nama' => 'Riyadi Purwanto, S.T., M.Eng.',
                'alamat' => 'Jl. Maju No. 789',
                'email' => 'riyadi@example.com',
                'no_hp' => '08111222333',
                'matkul_id' => 3,
            ],
            [
                'nidn' => '0609058102',
                'nama' => 'Nur Wahyu Rahadi, S.Kom., M.Eng.',
                'alamat' => 'Jl. Sejahtera No. 1011',
                'email' => 'nwahyu.r09@gmail.com',
                'no_hp' => '08155667788',
                'matkul_id' => 4,
            ],
            [
                'nidn' => '0017118706',
                'nama' => 'Annas Setiawan Prabowo, S.Kom., M.Eng.',
                'alamat' => 'Jl. Bahagia No. 1213',
                'email' => 'annassetiawanp@pnc.ac.id',
                'no_hp' => '08199001122',
                'matkul_id' => 6,
            ],
            [
                'nidn' => '0601128402',
                'nama' => 'Cahya Vikasari, S.T., M.Eng.',
                'alamat' => 'Jl. Harmoni No. 1415',
                'email' => 'charlie.brown@example.com',
                'no_hp' => '08133445566',
                'matkul_id' => 5,
            ],
            [
                'nidn' => '0607058401',
                'nama' => 'Andesita Prihantara, S.T., M.Eng.',
                'alamat' => 'Jl. Damai No. 1617',
                'email' => 'grace.davis@example.com',
                'no_hp' => '08177889900',
                'matkul_id' => 7,
            ],
            [
                'nidn' => '0008089002',
                'nama' => 'Prih Diantono Abdau, S.Kom., M.Kom.',
                'alamat' => 'Jl. Berkat No. 1819',
                'email' => 'daniel.lee@example.com',
                'no_hp' => '08111222333',
                'matkul_id' => 8,
            ],
            [
                'nidn' => '0615068102',
                'nama' => 'Antonius Agung Hartono, S.T., M.Eng.',
                'alamat' => 'Jl. Makmur No. 2021',
                'email' => 'sophie.adams@example.com',
                'no_hp' => '08155667788',
                'matkul_id' => 9,
            ],
            [
                'nidn' => '9900112233',
                'nama' => 'David Miller',
                'alamat' => 'Jl. Rukun No. 2223',
                'email' => 'david.miller@example.com',
                'no_hp' => '08199001122',
                'matkul_id' => 10,
            ],
        ]);

        foreach ($data as $value) {
            Lecturer::insert([
                'nidn' => $value['nidn'],
                'nama' => $value['nama'],
                'alamat' => $value['alamat'],
                'email' => $value['email'],
                'no_hp' => $value['no_hp'],
                'matkul_id' => $value['matkul_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
