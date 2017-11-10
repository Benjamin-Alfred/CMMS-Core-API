<?php

use Illuminate\Database\Seeder;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Dog::class, 10)->create();
    }
}
