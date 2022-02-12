<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class roleseedre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role =[
         [
            'name'=>'admin',
            'email'=>'admin@mail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('12345678'),
            'remember_token'=> Str::random(10),
            'role'=>'admin'
         ],

         [
             'name'=>'directr',
             'email'=>'directr@mail.com',
             'email_verified_at'=>now(),
            'password'=>Hash::make('12345678'),
            'remember_token'=> Str::random(10),
            'role'=>'directr'

         ],
        ];
        DB::table('users')->insert($role);

    }
}
