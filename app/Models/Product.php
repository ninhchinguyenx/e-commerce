<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'catalogue_id',
        'name',
        'slug',
        'sku',
        'img_thumbnail',
        'price_regular',
        'price_sale',
        'text',
        'material',
        'use_manual',
        'content',
        'public_id',
        'views',
        'is_active',
        'is_hot_deal',
        'is_show_home',
        'is_good_deal',
        'is_new',
    ];

    protected $casts  = [
        'is_active' => 'boolean',
        'is_hot_deal' => 'boolean',
        'is_show_home' => 'boolean',
        'is_good_deal' => 'boolean',
        'is_new' => 'boolean',
    ];

    public function catalogue()
    {
        return $this->belongsTo(Catalogue::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function galleries()
    {
        return $this->hasMany(ProductGallery::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
