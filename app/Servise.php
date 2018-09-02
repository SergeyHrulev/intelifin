<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servise extends Model
{
    use SoftDeletes;

    protected $fillable =[
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


}
