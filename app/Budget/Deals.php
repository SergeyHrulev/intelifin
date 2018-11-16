<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;

class Deals extends Model
{
    protected $fillable = [
        'contractor_id',
        'deal_name',
        'description',
        'sum',
        'deal_date'
    ];

    public function contractor(){
        return $this->belongsTo(Contractor::class);
    }
}
