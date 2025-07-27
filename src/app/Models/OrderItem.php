<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'menu_id',
        'quantity',
        'subtotal',
    ];

    /**
     * Relasi ke Order
     * Satu OrderItem hanya milik satu Order
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Relasi ke Menu
     * Satu OrderItem hanya terkait ke satu Menu
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
