<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'structural_units_id',
        'department_name',
        'deleted_at'
    ];

    public function payment(){
        return $this->hasMany(Payment::class);
    }

    public function structuralUnit(){
        return $this->belongsTo(StructuralUnit::class, 'structural_units_id', 'id');
    }
}
