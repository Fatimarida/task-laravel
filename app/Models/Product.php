<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin Builder
 */
class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['created_at'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function ratings()
    {
        return $this->hasMany(ProductRating::class);
    }

    public function sizes()
    {
        return $this->hasMany(ProductSize::class);
    }

    public function avgRating()
    {
        return $this->ratings->avg('star_count');
    }


}
