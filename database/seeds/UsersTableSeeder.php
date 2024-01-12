<?php
namespace Database\Seeder;

use Illuminate\Database\Seeder;
use DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();
        User::create(array('name' => 'trueme1', 'email' => 'trueme1@gmail.com', 'password' => bcrypt('12345')));
        User::create(array('name' => 'trueme2', 'email' => 'trueme2@gmail.com', 'password' => bcrypt('12345')));
    }
}
