<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('book_id');
            $table->date('borrow_date');
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('book_id')
                  ->references('id')
                  ->on('books')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        // Drop foreign key constraints before dropping the table
        Schema::table('borrows', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['book_id']);
        });

        Schema::dropIfExists('borrows');
    }
};