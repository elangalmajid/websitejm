<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Admin::updateOrCreate(
            ['username' => 'admin'],
            [
                'password' => Hash::make('admin'),
                'fullname' => 'admin',
                'email' => 'admin@gmail.com',
                'division' => 'ITE',
                'status' => 'active'
            ]
        );
    }
}
