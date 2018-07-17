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
        $tags = ['二子玉川', '二子新地', '桜新町', '後楽園', '虎ノ門', '原宿', '渋谷', '東京', '横浜'];
        foreach ($tags as $tag) App\Tag::create(['name' => $tag]);
        //地名たくさん入れたよ。みづき
    }
}
