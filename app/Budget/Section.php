<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'section_name',
        'deleted_at'
    ];

    public function mainArticle(){
        return $this->hasMany(MainArticle::class);
    }
}
