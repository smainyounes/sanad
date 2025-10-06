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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_id')->nullable()->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');


            $table->unsignedBigInteger('specialist_id')->nullable()->index();
            $table->foreign('specialist_id')->references('id')->on('users')->onDelete('set null');

            $table->string('title');
            $table->string('description');
            $table->date('date');
            $table->boolean('is_online');
            $table->string('status')->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
