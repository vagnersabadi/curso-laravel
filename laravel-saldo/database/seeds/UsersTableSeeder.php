<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Vagner Sabadi',
            'email'     => 'vagnerbuzatta@hotmail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
