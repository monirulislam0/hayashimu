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
        Schema::create('categories', function (Blueprint $table) {
              $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('parent_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->longText('description')->nullable();
            $table->integer('sorting')->default(0);
            $table->boolean('featured')->default(false);
            $table->boolean('menu')->default(false);
            $table->string('image')->nullable();
            $table->string('hover_image')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('is_show_top_sidebar')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
