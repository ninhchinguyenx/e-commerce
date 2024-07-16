<?php

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
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
        if (!Schema::hasTable('product_variants')) {

            Schema::create('product_variants', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Product::class)->constrained();
                $table->foreignIdFor(ProductSize::class)->constrained();
                $table->foreignIdFor(ProductColor::class)->constrained();
                $table->unsignedInteger('quatity')->default(0)->nullable();
                $table->string('image')->nullable();
                $table->timestamps();

                $table->unique(['product_id', 'product_size_id', 'product_color_id'], 'product_variant_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
