<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
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
            'name'      => ' なかやまきんに君',
            'email'     => 'mustle@gmail.com',
            ],
            [
            'name'      => ' hogehoge',
            'email'     => 'hoge@gmail.com',
            ],
            [
            'name'      => ' HAGETA',
            'email'     => 'hage@hoge.com',
            ],
        ];


        foreach ($users as $user) {
            DB::table('users')->insert([
                'name'       => $user['name'],
                'email'      => $user['email'],
                'password'   => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
