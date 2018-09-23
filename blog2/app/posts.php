<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Posts extends Model // tu đay đã ko viết hoa rồi
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'alias', 'content', 'feature_image', 'meta_data'
    ];
}
