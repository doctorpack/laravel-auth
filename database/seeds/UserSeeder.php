<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             $users = [
            [
                'name' => 'qwer',
                'email' => 'asdf@asdf.qwer',
                'password' => Hash::make('qwer'),
            ],
            [
                'name'      => 'asdf',
                'email'     => 'asdf@asdf',
                'password'  => Hash::make('asdf'),
            ],
            [
                'name'      => 'zxcv',
                'email'     => 'zxcvf@zxcv',
                'password'  => Hash::make('zxcv'),
            ],
        ];

        foreach ($users as  $user) {
        //     $objUser = new User;
        //     $objUser->name     = $user['name'];
        //     $objUser->email    = $user['email'];
        //     $objUser->password   = $user['password'];
        //     $objUser->save();

            User::insert($user);
        }
    }
}
