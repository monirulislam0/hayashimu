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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->mediumText('short_desc')->nullable();
            $table->longText('description')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('emi_text')->nullable();
            $table->string('pdf_file')->nullable();
            $table->text('meta_tags')->nullable();
            $table->text('product_attribute')->nullable();
            $table->text('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('image')->nullable();
            $table->float('price', 16, 2)->default(0);
            $table->float('discount',8, 2)->default(0);
            $table->float('stock', 8, 2)->default(0);
            $table->string('unit')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_show_top_sidebar')->default(0);
            $table->boolean('featured')->default(0);
            $table->boolean('new_item')->default(0);
            $table->boolean('in_stock')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
