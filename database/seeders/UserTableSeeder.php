<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nip'               =>  '198701272012122001',
            'nama_lengkap'      => 'Endina Putri Purwandari , S.T., M.Kom.',
            'email'             => 'endina@mail.com',
            'password'          => bcrypt('password'),
        ]);
    }
}
