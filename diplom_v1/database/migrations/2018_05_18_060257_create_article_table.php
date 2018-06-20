<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('articles', function (Blueprint $table) {
            $table->integer('number');
            $table->integer('amount');
            $table->integer('performance1');
            $table->integer('performance2');
            $table->integer('performance3');
            $table->integer('performance4');
            $table->float('cost_price1', 3, 1);
            $table->float('cost_price2', 3, 1);
            $table->float('cost_price3', 3, 1);
            $table->float('cost_price4', 3, 1);
            $table->float('price', 3, 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }

}
