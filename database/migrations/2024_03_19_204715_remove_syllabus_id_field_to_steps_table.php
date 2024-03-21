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
        Schema::table('steps', function (Blueprint $table) {
            $table->dropForeign(['syllabus_id']);
            $table->dropColumn('syllabus_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('steps', function (Blueprint $table) {
            //
        });
    }
};
