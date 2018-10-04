<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(RolesAndPermissionsSeeder::class);
        //$this->call(CMSTableSeeder::class);
        //$this->call(IncidentTypesSeeder::class);
        //$this->call(RegistrarsSeeder::class);

        /*
        factory(App\Incident::class, 50)->create();

            factory(\App\Inquiry::class, 10)
            ->create()
            ->each(function ($inq){
                $inq->incidents()->attach(\App\Incident::inRandomOrder()->take(random_int(1,5))->get());
            });
        */
        //$this->call(InquiryStatusSeeder::class);
    }
}
