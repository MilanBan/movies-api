<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MoviesTableSeeder::class); // odkomentarises i promenis UsersTableSeeder u svoj ts
    }
}
