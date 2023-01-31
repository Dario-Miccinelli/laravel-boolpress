<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
 protected $table = 'posts';

 protected $fillable = [
    'title',
    'body',
    'category_id',
    'category_name',
    'cover',
];

public function category() {
// relation function

        return $this->belongsTo('App\Category');
}


public function tags() {
        return $this->BelongsToMany('App\Tag');
}


}
