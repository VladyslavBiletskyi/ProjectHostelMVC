<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'id' => 3,
            'floor_id' => 2,
            'places' => 3,
            'description' => 'Описание надо отредактировать'
        ]);

        DB::table('rooms')->insert([
            'id' => 4,
            'floor_id' => 2,
            'places' => 3,
            'description' => 'Описание надо отредактировать'
        ]);

    }
}
