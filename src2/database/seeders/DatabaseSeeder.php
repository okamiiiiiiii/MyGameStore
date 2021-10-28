<?php

namespace Database\Seeders;

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
        $this->call(GameSeeder::class);
        $this->call(PlatformSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(GameTagSeeder::class);
        $this->call(GamePlatformSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
