<?php

use App\Models\Product;
use App\Models\Tag;
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
        if (!Schema::hasTable('product_tag')) {

            Schema::create('product_tag', function (Blueprint $table) {
                $table->foreignIdFor(Product::class)->constrained();
                $table->foreignIdFor(Tag::class)->constrained();


                $table->primary(['product_id', 'tag_id']);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tag');
    }
};
