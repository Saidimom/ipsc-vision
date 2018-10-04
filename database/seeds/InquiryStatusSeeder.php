<?php

use Illuminate\Database\Seeder;

class InquiryStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\InquiryStatus::create([
            'name' => 'in_process'
        ]);
        \App\InquiryStatus::create([
            'name' => 'eliminated_by_the_owner'
        ]);
        \App\InquiryStatus::create([
            'name' => 'unavailable'
        ]);
        \App\InquiryStatus::create([
            'name' => 'investigated'
        ]);


    }
}
