<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaidToUsers extends Migration
{

    public function up() {
        Schema::table('users', function($table) {
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
        });
    }

    public function down() {
        Schema::table('users', function($table) {
            $table->dropColumn('provider');
            $table->dropColumn('provider_id');
        });
    }

}
