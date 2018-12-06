<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StructuralUnit extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'structural_unit_name',
        'deleted_at'
    ];

}
