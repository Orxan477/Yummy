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
        Schema::create('bokings', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',50);
            $table->string('phone',14);
            $table->dateTime('date_and_time');
            $table->integer('people_count');
            $table->text('message');
            $table->timestamps();
            $table->integer('is_participated');
            $table->boolean('is_active')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bokings');
    }
};
