<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('age')->nullable();
            $table->string('degree')->nullable();
            $table->string('email')->nullable();
            $table->string('freelance')->nullable();
            $table->string('intro')->nullable();
            $table->string('img')->nullable()->nullable();
            $table->string('role')->nullable();
            $table->string('index_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
