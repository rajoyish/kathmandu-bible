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
        Schema::create('academic_programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('badge_title');
            $table->string('badge_color')->default('blue');
            $table->string('language');
            $table->text('description');
            $table->text('purpose');
            $table->text('vision');
            $table->string('credits')->default('24 credits');
            $table->json('admission_requirements')->nullable();
            $table->json('admission_process')->nullable();
            $table->integer('order_column')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_programs');
    }
};
