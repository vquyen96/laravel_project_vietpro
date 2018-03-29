<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('vp_users')->insert([
            [
                'email'=>'q.uyen96@gmail.com',
                'password'=>bcrypt('9876543210'),
                'level'=>1
            ],
            [
                'email'=>'xuanhung2401@gmail.com',
                'password'=>bcrypt('9876543210'),
                'level'=>1
            ]
        ]);
    }
}
