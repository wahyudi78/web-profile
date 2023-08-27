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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('users')->default(1);
            $table->string('title')->unique();
            $table->string('description');
            $table->string('image')->nullable();;
            $table->string('url')->nullable();;
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('publish_at')->useCurrent();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
