<?php

use Illuminate\Database\Seeder;

class RegistrarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Registrar::create([
            'name' => 'Sarkor Telecom',
            'site_url' => 'site.uz',
            'phone' => '7777777',
            'fax' => '7777777',
            'address' => 'address'
        ]);

        \App\Registrar::create([
            'name' => 'Virtual Clouds',
            'site_url' => 'site.uz',
            'phone' => '7777777',
            'fax' => '7777777',
            'address' => 'address'
        ]);

        \App\Registrar::create([
            'name' => 'ООО «BILLUR COM»',
            'site_url' => 'site.uz',
            'phone' => '7777777',
            'fax' => '7777777',
            'address' => 'address'
        ]);

        \App\Registrar::create([
            'name' => 'ООО «Arsenal-D»',
            'site_url' => 'site.uz',
            'phone' => '7777777',
            'fax' => '7777777',
            'address' => 'address'
        ]);

    }
}
