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
        $this->call([
            UserSeeder::class,
            SiteSeeder::class,
            SettingSeeder::class,
            LaratrustSeeder::class,
        ]);
        factory('App\Models\User', 10)->create();
    }
}
