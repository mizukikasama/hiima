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
        $tags = ['二子玉川', '渋谷', '桜新町', '後楽園', '虎ノ門', '田町', '二子新地', '北千住', 'pedi'];
        foreach ($tags as $tag) App\Tag::create(['name' => $tag]);
        //地名たくさん入れたよ。みづき
    }
}
