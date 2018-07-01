<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('Author');
            $table->string('book_desc');
            $table->string('Genre');
            $table->string('lib_sections');
            $table->string('isBorrowed');
            $table->integer('user_id');
            $table->integer('times_borrowed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_lists');
    }
}
