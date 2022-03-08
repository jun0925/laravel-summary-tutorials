<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('authors', function(Blueprint $table){
            $table->string('name')->after('email')->nullable(); // bulable()은 NULL을 허용한다는 뜻
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('authors', function(Blueprint $table){
            Schema::table('authors', function(Blueprint $table) {
                $table->dropColumn('name');
            });
        });
    }
}
