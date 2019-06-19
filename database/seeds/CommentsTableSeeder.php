<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;  

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();

        $comments = [
            [
                'content'     => 'なんて日だ！！！',
                'post_id'     => '1',
            ],
            [
                'content'     => 'ゲスの極み！！！',
                'post_id'     => '1',
            ],
            [
                'content'     => 'ちょっと何行ってるかわからないっす。',
                'post_id'     => '2',
            ],
            
        ];

        foreach ($comments as $comment) {
            DB::table('comments')->insert([
                'user_id'     => $user->id,
                'content'     => $comment['content'],
                'post_id'     => $comment['post_id'],
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]);
        }

    }
}
