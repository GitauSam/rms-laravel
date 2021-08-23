<?php

namespace App\Models\Vendor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishImage extends Model
{
    use HasFactory;

    protected $fillable = [
        "dish_id",
        "image_url",
        "status"
    ];

    public function dish() {
        return $this->belongsTo(Dish::class);
    }
}
