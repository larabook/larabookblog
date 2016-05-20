<?php

use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_posts')->insert([
            'title'=>'larabook test',
            'body'=>'all our posts some how relates to laravel PHP framework.'
        ]);

        DB::table('blog_posts')->insert([
            'title'=>'پست آزمایشی',
            'body'=>'تمامی پستهای ما در لارابوک به روشی به لاراول مرتبط هستند.'
        ]);

        DB::table('blog_posts')->insert([
            'title'=>'larabook test',
            'body'=>'all our posts some how relates to laravel PHP framework.'
        ]);

        DB::table('blog_posts')->insert([
            'title'=>'larabook test',
            'body'=>'all our posts some how relates to laravel PHP framework.'
        ]);

        DB::table('blog_posts')->insert([
            'title'=>'larabook test',
            'body'=>'all our posts some how relates to laravel PHP framework.'
        ]);
    }
}
