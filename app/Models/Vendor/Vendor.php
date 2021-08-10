<?php

namespace App\Models\Vendor;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vendor_name',
        'status',
        'deleted_by',
        'deleted_at'
    ];

    public function customer() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
