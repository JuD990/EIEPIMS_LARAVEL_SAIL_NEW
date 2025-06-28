<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call other seeders here
        $this->call(DummyUserSeeder::class);
        $this->call(OtherUsers::class);
    }
}
