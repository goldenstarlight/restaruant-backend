<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'name' => 'Admin Admin',
            'email' => 'admin@softui.com',
            'password' => Hash::make('secret'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'role_id' => 1,
            'avatar' => '/team-1.jpg'
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'first_name' => 'Creator',
            'last_name' => 'Creator',
            'name' => 'Creator Creator',
            'email' => 'creator@softui.com',
            'password' => Hash::make('secret'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'role_id' => 2,
            'avatar' => '/team-2.jpg'
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'first_name' => 'Member',
            'last_name' => 'Member',
            'name' => 'Member Member',
            'email' => 'member@softui.com',
            'password' => Hash::make('secret'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'role_id' => 3,
            'avatar' => '/team-3.jpg'
        ]);
    }
}