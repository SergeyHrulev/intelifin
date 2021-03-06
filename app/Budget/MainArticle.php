<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainArticle extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sections_id',
        'main_article_name',
        'deleted_at'
    ];

    public function section(){
        return $this->belongsTo(Section::class, 'sections_id', 'id');
    }
}
