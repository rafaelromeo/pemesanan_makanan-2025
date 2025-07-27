<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     use HasFactory;

    protected $fillable = [
        'customer_name',
        'status',
    ];

    /**
     * Relasi ke OrderItem
     * Satu Order punya banyak OrderItem
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
