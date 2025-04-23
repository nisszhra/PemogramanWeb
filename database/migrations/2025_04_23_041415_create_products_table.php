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
            $table->unsignedBigInteger('id', true); // Primary Key, Auto-increment
            $table->string('name', 255); // Required
            $table->string('slug', 255)->unique(); // SEO-friendly URL, Unique
            $table->text('description')->nullable(); // Nullable
            $table->string('sku', 50)->unique(); // Unique identifier
            $table->decimal('price', 10, 2)->default(0); // Price >= 0
            $table->integer('stock')->default(0); // Stock >= 0
            $table->unsignedBigInteger('product_category_id')->nullable(); // Foreign Key
            $table->string('image_url', 255)->nullable(); // URL Gambar
            $table->boolean('is_active')->default(true); // Aktif atau tidak
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('product_category_id')
                ->references('id')->on('product_categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
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
