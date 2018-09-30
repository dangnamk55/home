<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
	use AliasGenerate;
	use SaveImage;

    protected $fillable = [
        'name', 'content', 'description',
	    'image', 'published_date'
    ];


	public static function boot()
	{
        parent::boot();
		self::creating( function ( $item )  {
			$item->aliasOnCreate();
			$item->storeImageOnCreating();

			if(empty($item->published_date)) {
			    $item->published_date = Carbon::now();
            }

		});
		self::updating( function ( $item )  {
			$item->storeImageOnUpdating();
		});
	}
}
