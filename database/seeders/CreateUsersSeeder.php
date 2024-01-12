<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'kelas' => '-',
                'jk' => 'Laki-Laki',
                'email' => 'admin@gmail.com',
                'type' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Awaysha Cessarmana',
                'kelas' => 'XII Rekayasa Perangkat Lunak',
                'jk' => 'Laki-Laki',
                'email' => 'awaysha@gmail.com',
                'type' => 2,
                'password' => bcrypt('awaysha123'),
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
