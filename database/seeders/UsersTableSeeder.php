<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'test',
                'email' => 'test@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bFcP2HplgIViGUD3lLGjLOYw2ykntt37vJl/hUfoi3lewqa3KM1Iq',
                'remember_token' => NULL,
                'created_at' => '2021-08-29 00:48:58',
                'updated_at' => '2021-08-29 00:53:38',
            ),
        ));
        
        
    }
}