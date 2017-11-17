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
        DB::table('users')->insert([
            'first_name' => 'Administrator',
            'middle_name' => 'Administrator',
        	'last_name' => 'Administrator',
            'email_address' => 'mapesa@gmail.com',
            'mobile_phone' => '+254788492586',
            'organizational_affiliation' => 'Association of Public Health Laboratories',
        	'password' => bcrypt('admin')
    	]);
    }
}
