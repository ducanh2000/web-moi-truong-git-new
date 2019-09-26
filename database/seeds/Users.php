<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
        	['id'=>1,'name'=>'admin','email'=>'admin@gmail.com','password'=>bcrypt('123456')],
        	['id'=>2,'name'=>'editor','email'=>'editor@gmail.com','password'=>bcrypt('123456')],
        	['id'=>3,'name'=>'user','email'=>'user@gmail.com','password'=>bcrypt('123456')],

        ]);
    }
}
