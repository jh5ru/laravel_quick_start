<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'site_id'=>1,
            'name' => 'admin',
            'email' => 'admin@jh5.ru',
            'password' => Hash::make('Glonkas55d3!'),
            'created_at'=>now(),
            'updated_at'=>now(),
            'email_verified_at'=>now(),
        ]);
    }
}
