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
        factory(\App\Models\Passage::class, 20)->create();
//        factory(\App\Models\Label::class, 20)->create();
        //factory(\App\User::class,50)->create();
         //$this->call(UsersTableSeeder::class);
    }
}
