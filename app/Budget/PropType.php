<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;

class PropType extends Model
{
    protected $fillable = [
        'property_type'
    ];

    public function customer(){
        return $this->hasMany(Contractor::class);
    }
}
