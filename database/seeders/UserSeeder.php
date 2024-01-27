<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'username' => 'admin',
            'role' => 'Admin',
            'email' => 'admin@localhost',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
        ]);
        User::create([
            'username' => 'hod',
            'role' => 'HOD',
            'email' => 'hod@localhost',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'username' => 'hrd',
            'role' => 'HRD',
            'email' => 'hrd@localhost',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'username' => 'gm',
            'role' => 'GM',
            'email' => 'gm@localhost',
            'password' => bcrypt('12345678')
        ]);

    }
}
