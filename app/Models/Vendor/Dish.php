<?php

namespace App\Models\Vendor;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "ingredients",
        "price",
        "status"
    ];

    public function dishImages() {
        return $this->hasMany(DishImage::class);
    }

    public function vendor() {
        return $this->belongsTo(User::class);
    }
}
