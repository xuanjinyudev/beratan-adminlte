<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('author')->nullable();
            $table->date('published_at')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->string('category')->nullable();
            $table->string('tags')->nullable(); // Comma-separated tags
            $table->string('thumbnail')->nullable();
            $table->text('content');
            $table->string('excerpt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
