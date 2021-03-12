<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            [
                'name' => 'Rahmat Hidayatullah',
                'email' => 'rahmat@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Sakuranomiya',
                'email' => 'sakuranomiya@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Chika Fujiwara',
                'email' => 'chika@example.com',
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
