<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 protected $table = 'posts';

 protected $fillable = [
    'title',
    'body',
    'category_id',
    'category_name'
];

public function category() {
// relation function

        return $this->belongsTo('App\Category');
}



}
