<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'barticles_id',
        'department_id',
        'payment_name',
        'summ',
        'bdr_plan',
        'bdr_fact',
        'bdds_plan',
        'bdds_fact',
        'deleted_at'
    ];

    public function barticles(){
        return $this->belongsTo(Article::class, 'barticles_id', 'id');
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function paymentType(){
        return $this->belongsTo(PaymentType::class, 'payment_type_id');
    }
}
