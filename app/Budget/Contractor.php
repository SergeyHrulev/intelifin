<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    protected $fillable = [
        'prop_type_id',
        'company_name',
        'inn',
        'kpp',
        'legal_address',
        'real_address',
        'phone',
        'email',
        'description'
    ];

    public function propType(){
        return $this->belongsTo(PropType::class);
    }

    public function deal(){
        return $this->hasMany(Deals::class);
    }
}
