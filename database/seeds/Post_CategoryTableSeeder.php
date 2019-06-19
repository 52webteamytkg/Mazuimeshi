<?php

use Illuminate\Database\Seeder;

class Post_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $posts = Post::all();



        $post_categories = [
            [
                'post_id'       => '1',
                'category_id'   => '2',

            ],
            [
                'post_id'       => '2',
                'category_id'   => '1',

            ],
            [
                'post_id'       => '3',
                'category_id'   => '2',

            ],


        ];

        foreach ($post_categories as $post_category) {
            DB::table('post_category')->insert([
                'post_id'      => $post_category['post_id'],
                'category_id'  => $post_category['category_id'],
            ]);
        }

    }
}
