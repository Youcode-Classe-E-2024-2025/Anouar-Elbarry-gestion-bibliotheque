<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users',function (Blueprint $table){
            if (Schema::hasColumn('users', 'usename')) {
                $table->renameColumn('usename', 'username');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // If the column 'username' exists, rename it back to 'urename'
            if (Schema::hasColumn('users', 'username')) {
                $table->renameColumn('username', 'urename');
            }
        });
    }
};
