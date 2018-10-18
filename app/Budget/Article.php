<?php

namespace App\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $table = 'barticles';

    protected $fillable = [
        'main_articles_id',
        'article_code',
        'article_name',
        'deleted_at'
    ];

    public function mainArticle(){
        return $this->belongsTo(MainArticle::class, 'main_articles_id', 'id');
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }

}
