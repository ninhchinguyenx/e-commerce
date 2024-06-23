<?php

use App\Models\Catalogue;
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
        if (!Schema::hasTable('products')) {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Catalogue::class)->constrained();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->string('img_thumbnail')->nullable();
            $table->double('price_regular')->nullable();
            $table->double('price_sale')->nullable();
            $table->longText('text')->nullable();
            $table->text('material')->nullable();
            $table->text('use_manual')->nullable();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('views')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_hot_deal')->default(false);
            $table->boolean('is_show_home')->default(false);
            $table->boolean('is_good_deal')->default(false);
            $table->boolean('is_new')->default(false);
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
