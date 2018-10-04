<?php

use Illuminate\Database\Seeder;

class CMSTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\CMS::create(['name' => 'Wordpress']);
        \App\CMS::create(['name' => 'Joomla!']);
        \App\CMS::create(['name' => 'ModX']);
        \App\CMS::create(['name' => 'Bitrix']);
        \App\CMS::create(['name' => 'OpenCart']);
        \App\CMS::create(['name' => 'Drupal']);


    }
}
