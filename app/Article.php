<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'metatitle',
        'metakey',
        'metadescription',
        'metacanonical',
        'title',
        'slug',
        'anons',
        'description',
        'img',
        'preview',
        'alt',
        'img_title',
        'deleted_at'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getArticleBySlug($slug){
        return $this->where('slug', $slug)->get();
    }
}
