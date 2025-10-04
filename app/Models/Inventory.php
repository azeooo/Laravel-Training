<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'qty', 'price', 'description'
    ];

    // Relationship: Inventory belongs to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
