<?php

use Illuminate\Database\Seeder;

class IncidentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\IncidentType::create([
            'name' => 'Несанкционированная загрузка контента'
        ]);

        \App\IncidentType::create([
            'name' => 'Изменение главной страницы'
        ]);

        \App\IncidentType::create([
            'name' => 'Размещение фишингового контента'
        ]);
    }
}
