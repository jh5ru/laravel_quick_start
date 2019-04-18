<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // app env
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'app',
            'name' => 'env',
            'value' => 'local',
        ]);

        // app debug
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'app',
            'name' => 'debug',
            'value' => true,
        ]);

        // app url
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'app',
            'name' => 'url',
            'value' => 'http://test.cms',
        ]);

        // app timezone
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'app',
            'name' => 'timezone',
            'value' => 'Europe/Moscow',
        ]);

        // app locale
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'app',
            'name' => 'locale',
            'value' => '../lang/ru',
        ]);

        // app fallback locale
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'app',
            'name' => 'fallback_locale',
            'value' => '../lang/en',
        ]);

        // app faker locale
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'app',
            'name' => 'faker_locale',
            'value' => 'ru_Ru',
        ]);

        // app name
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'app',
            'name' => 'name',
            'value' => 'Тестовый сайт 1',
        ]);

        // app description
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'app',
            'name' => 'description',
            'value' => 'Первый сайт',
        ]);

        // app users for all sites?
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'app',
            'name' => 'user_login',
            'value' => 1,
        ]);

        // cache driver
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'cache',
            'name' => 'default',
            'value' => 'file',
        ]);

        // cache driver prefix
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'cache',
            'name' => 'prefix',
            'value' => 'jh5',
        ]);

        // database driver
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'database',
            'name' => 'default',
            'value' => 'mysql',
        ]);

        // mail driver
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'mail',
            'name' => 'driver',
            'value' => 'smtp',
        ]);

        // mail host
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'mail',
            'name' => 'host',
            'value' => 'smtp.yandex.ru',
        ]);

        // mail port
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'mail',
            'name' => 'port',
            'value' => '465',
        ]);

        // mail from address
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'mail',
            'name' => 'from.address',
            'value' => 'test@yandex.ru',
        ]);

        // mail from name
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'mail',
            'name' => 'from.name',
            'value' => 'Test',
        ]);

        // mail encryption
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'mail',
            'name' => 'encryption',
            'value' => 'ssl',
        ]);

        // mail username
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'mail',
            'name' => 'username',
            'value' => 'test@yandex.ru',
        ]);

        // mail password
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'mail',
            'name' => 'password',
            'value' => 'test',
        ]);

        // mail sendmail
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'mail',
            'name' => 'sendmail',
            'value' => '/usr/sbin/sendmail -bs',
        ]);


        // hashing driver
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'hashing',
            'name' => 'driver',
            'value' => 'argon2id',
        ]);

        // session driver
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'session',
            'name' => 'driver',
            'value' => 'file', //database
        ]);

        // session lifetime
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'session',
            'name' => 'lifetime',
            'value' => '120',
        ]);

        // session expire_on_close
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'session',
            'name' => 'expire_on_close',
            'value' => false,
        ]);

        // session encrypt
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'session',
            'name' => 'encrypt',
            'value' => false,
        ]);

        // session cookie
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'session',
            'name' => 'cookie',
            'value' => 'site_session',
        ]);

        // session secure
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'session',
            'name' => 'secure',
            'value' => false,
        ]);

        // session same_site
        DB::table('settings')->insert([
            'site_id'=>1,
            'category' => 'session',
            'name' => 'same_site',
            'value' => '',
        ]);


    }
}
