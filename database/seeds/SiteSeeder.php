<?php

use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            'domain' => 'test.cms',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
