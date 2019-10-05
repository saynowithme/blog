<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => "Đặng Trường Trúc",
                'email' => "truongtrucit@gmail.com",
                'password' => bcrypt('Abc123!@#')

            ],
            [
                'name' => "Mai Tố Uyên",
                'email' => "maitouyenhanu@gmail.com",
                'password' => bcrypt('Abc123!@#')

            ],
            [
                'name' => "Meo Meo",
                'email' => "meomeo@gmail.com",
                'password' => bcrypt('Abc123!@#')

            ],
            
        ]);
    }
}
