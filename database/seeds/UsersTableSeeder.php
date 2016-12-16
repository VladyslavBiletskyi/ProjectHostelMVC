<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Админ Админович',
            'email' => 'hostel.moderator@gmail.com',
            'password' => bcrypt('secret'),
            'is_admin' => 1
        ]);
    }
}
