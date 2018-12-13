<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsLike extends Model
{
    protected  $fillable =
        [
          'news_id',
          'like_one',
          'like_two',
          'like_three',
        ];
}
