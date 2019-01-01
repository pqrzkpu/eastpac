<?php

use Illuminate\Database\Seeder;

class SiteConfigsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {



        \DB::table('site_configs')->delete();

        \DB::table('site_configs')->insert(array (
            array (
                'key' => 'SITE_TITLE',
                'value' => 'Eastpac',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 10:56:56',
            ),
            array (
                'key' => 'CONTACT_EMAIL',
                'value' => 'myemail2@something.com',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:24:40',
            ),
            array (
                'key' => 'CONTACT_ADDRESS',
                'value' => 'Jl Kertanegara No. 65 Jakarta Selatan',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:37:54',
            ),
            array (
                'key' => 'CONTACT_PHONE_NUMBER',
                'value' => '+62 81293728732',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:41:04',
            ),
            array (
                'key' => 'ETHEREUM_ADDRESS',
                'value' => 'http://localhost:5000',
                'type' => 'string',
                'created_at' => '2018-12-27 00:00:00',
                'updated_at' => '2018-12-27 04:41:04',
            ),
        ));


    }
}
