<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUserIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_tag', function (Blueprint $table) {
            $table->integer('user_id');
            // $table->integer('nickname_id');
       
        });
        
       }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('post_tag', function (Blueprint $table) {
            $table->dropColumn('user_id');
            // $table->dropColumn('nickname_id');
        });
    }
}

//up down中身変更したよ。ばなな
