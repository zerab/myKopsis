<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('members')->insert([
          'fullname' => 'admin',
          'username' => 'admin',
          'gender' => 'Laki-laki',
          'birthdate' => '28',
          'birthmonth' => '12',
          'birthyear' => '2000',
          'level' => 'A',
          'email' => 'admin@gmail.com',
          'phone' => '089669243560',
          'password' => bcrypt('admin'),
          'member_id' => 1
      ]);
    }
}
