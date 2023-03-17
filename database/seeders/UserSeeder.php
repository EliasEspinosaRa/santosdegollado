<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Miguel',
            'apellidos' => 'Santos Martinez',
            'email' => 'miguelsantos@gmail.com',
            'password' => bcrypt('santos')

        ])->assignRole('admin');
        User::create([
            'name' => 'Carlos Perez',
            'apellidos' => 'Santos Martinez',
            'email' => 'carlosp12@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('maestro');
       
    }
}
