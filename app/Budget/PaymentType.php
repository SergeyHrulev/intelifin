<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $fillable = [
        'payment_type',
    ];

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
