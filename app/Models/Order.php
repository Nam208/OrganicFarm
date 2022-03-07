<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id', 'order_number', 'status', 'country', 'first_name', 'last_name', 'company_name', 'address', 'city', 'state', 'zip', 'phone', 'email', 'notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function items()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
