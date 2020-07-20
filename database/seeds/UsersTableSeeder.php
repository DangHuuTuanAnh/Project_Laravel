<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
       DB::table('users')->insert([
        ['name'=>'Đặng Tuấn Anh','email'=>'tuananh@gmail.com','phone'=>0335270067,'address'=>'Bắc Giang','role'=>0,'password'=>md5('Tuananh1997'),'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],


      ]);
   }
}
