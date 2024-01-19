<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // In your migration file
public function up()
{
    Schema::table('events', function (Blueprint $table) {
        $table->string('image', 255)->change(); // Change 255 to the desired length
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
