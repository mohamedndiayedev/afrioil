<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
            //
            DB::table('admins')->insert([
                'name'=> 'admin',
                'email'=> 'admin@mail.com',
                'password'=>Hash::make('123')
            ]);
        
    }
}
