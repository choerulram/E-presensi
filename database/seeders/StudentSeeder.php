<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        $data = ([
            [
                'nim' => '220302049',
                'nama' => 'Achmad Choerul Ramdhani',
                'alamat' => 'Jl. Contoh No. 123',
                'email' => 'john.doe@example.com',
                'no_hp' => '08123456789',
                'class_id' => 3,
            ],
            [
                'nim' => '220102050',
                'nama' => 'Alvia Esha Rizky',
                'alamat' => 'Jl. Contoh No. 456',
                'email' => 'jane.doe@example.com',
                'no_hp' => '08765432109',
                'class_id' => 3,
            ],
            [
                'nim' => '220202051',
                'nama' => 'Amalia Dyah Puspita',
                'alamat' => 'Jl. Sejahtera No. 789',
                'email' => 'michael.j@example.com',
                'no_hp' => '08111223344',
                'class_id' => 3,
            ],
            [
                'nim' => '220202052',
                'nama' => 'Apridho Mulyo Nurrezky',
                'alamat' => 'Jl. Damai No. 1011',
                'email' => 'emily.davis@example.com',
                'no_hp' => '08133445566',
                'class_id' => 3,
            ],
            [
                'nim' => '220302053',
                'nama' => 'Aurelli Elysia Prasetyo',
                'alamat' => 'Jl. Bahagia No. 1213',
                'email' => 'robert.smith@example.com',
                'no_hp' => '08155667788',
                'class_id' => 3,
            ],
            [
                'nim' => '220302054',
                'nama' => 'Diana Putri Cahyani',
                'alamat' => 'Jl. Harmoni No. 1415',
                'email' => 'sophia.taylor@example.com',
                'no_hp' => '08177889900',
                'class_id' => 3,
            ],
            [
                'nim' => '220302055',
                'nama' => 'Emaloroes Jernih Arifin',
                'alamat' => 'Jl. Berkat No. 1617',
                'email' => 'daniel.lee@example.com',
                'no_hp' => '08199001122',
                'class_id' => 3,
            ],
            [
                'nim' => '220102056',
                'nama' => 'Enndas Brena Sinulingga',
                'alamat' => 'Jl. Makmur No. 1819',
                'email' => 'olivia.brown@example.com',
                'no_hp' => '08111223344',
                'class_id' => 3,
            ],
            [
                'nim' => '220102057',
                'nama' => 'Fadilah Romdona',
                'alamat' => 'Jl. Rukun No. 2021',
                'email' => 'william.miller@example.com',
                'no_hp' => '08133445566',
                'class_id' => 3,
            ],
            [
                'nim' => '220202058',
                'nama' => 'Fiqhi Naura',
                'alamat' => 'Jl. Damai No. 2223',
                'email' => 'ava.davis@example.com',
                'no_hp' => '08155667788',
                'class_id' => 3,
            ],
        ]);

        foreach ($data as $value) {
            Student::insert([
                'nim' => $value['nim'],
                'nama' => $value['nama'],
                'alamat' => $value['alamat'],
                'email' => $value['email'],
                'no_hp' => $value['no_hp'],
                'class_id' => $value['class_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
