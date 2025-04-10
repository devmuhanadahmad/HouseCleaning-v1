<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->delete();

        $admins = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'super_admin'=>true,
                'status'=>'active',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'subAdmin',
                'email' => 'subAdmin@gmail.com',
                'super_admin'=>false,
                'status'=>'inactive',
                'password' => Hash::make('password'),
            ],

        ];

        foreach ($admins as $admin) {
            Admin::create([
                'name' => $admin['name'],
                'email' => $admin['email'],
                'super_admin' => $admin['super_admin'],
                'status' => $admin['status'],
                'password' => $admin['password'],
            ]);
        }
    }
}

