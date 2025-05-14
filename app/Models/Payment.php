<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'payment_intent_id', 'payment_method', 'amount', 'stripe_customer_id' , 'subscription_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
