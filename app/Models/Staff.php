<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'calc_staff';

    protected $fillable = [
        'name',
        'gross',
        'nett',
        'tax',
        'pension',
        'oms',
        'ossvn',
        'ossnspz',
        'sum'
    ];
}
