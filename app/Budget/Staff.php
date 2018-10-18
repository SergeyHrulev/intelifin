<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'departments_id',
        'name',
        'surname',
        'second_name',
        'wage',
        'bonus',
        'deleted_at'
    ];
}
