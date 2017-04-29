<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //REGISTA admin
      $user= Sentinel::registerAndActivate([
                      'email'      => 'admin@admin.com',
                      'password'   => 'admin',
                      'permissions'=>  [' '],
                      'last_login' =>  ' ',
                      'first_name' => 'Admin',
                      'last_name'  => 'Admin',
                      ]);

                    $role = Sentinel::findRoleById(1);
                    $role->users()->attach($user);
    }
}
