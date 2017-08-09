<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('roles')->insert([
        	'slug' => 'admin',
        	'name' => 'admin',
        	]);
        DB::table('roles')->insert([
        	'slug' => 'doctor',
        	'name' => 'doctor',
        	]);
        DB::table('roles')->insert([
        	'slug' => 'blood_donor',
        	'name' => 'blood_donor',
        	]);
        DB::table('users')->insert([
            'name' => "admin",
            'username' => "root",
            'email' => "root@admin.io",
            'password' => bcrypt("rootfahim"),
            ]);
        DB::table('role_users')->insert([
            'user_id' => 1,
            'role_id' =>1,
            ]);
        DB::table('activations')->insert([
            'user_id' => 1,
            'code' => str_random(10),
            'completed' => 1,
            ]);

    }
}
