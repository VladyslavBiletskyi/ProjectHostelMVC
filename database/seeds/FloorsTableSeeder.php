<?php

use Illuminate\Database\Seeder;

class FloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('floors')->insert([
            'id' => 1,
            'description' => 'Первый этаж общежития <№ 4>.'
        ]);
        DB::table('floors')->insert([
            'id' => 2,
            'description' => 'Второй этаж общежития <№ 4>.'
        ]);
        DB::table('floors')->insert([
            'id' => 3,
            'description' => 'Третий этаж общежития <№ 4>.'
        ]);
        DB::table('floors')->insert([
            'id' => 4,
            'description' => 'Четвертый этаж общежития <№ 4>.'
        ]);
    }
}
