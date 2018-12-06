<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $table = 'barticles';

    protected $fillable = [
        'section_id',
        'article_code',
        'article_name',
        'deleted_at'
    ];

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }

}
