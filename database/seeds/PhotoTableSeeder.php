<?php

use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $categories = ['cafe', '飲み会', '映画', 'お買い物', 'カラオケ','ジム','キャンプ','ゲーム','花火','ディズニー','がっつり系ごはん','さっぱり系ごはん','イタリアン','中華','和食'];
         
        foreach($categories as $category){
            
        
        DB::table('category')->insert([
            
            'name'=> $category
            
            ]);
        
        }
        
    }
    
}

