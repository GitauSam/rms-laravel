<?php

namespace App\Models\Buyer;

use App\Models\User;
use App\Models\Vendor\Dish;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'dish_id',
        'status'
    ];

    public function dish() {
        return $this->belongsTo(Dish::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
