<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class DislikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();
       
        $dislikes =[
            [
               'post_id'    =>'1',
               'comment_id' =>'1',
            ],

            [
                'post_id'    =>'1',
                'comment_id' =>'2',
            ],

             [
                'post_id'    =>'1',
                'comment_id' =>'2',
             ]

        ];




        foreach ($dislikes as $dislike) {
            DB::table('dislikes')->insert([
                'user_id'     => $user->id,
                'post_id'     => $dislike['post_id'],
                'comment_id'  => $dislike['comment_id'],
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]);
        }





    }
}
