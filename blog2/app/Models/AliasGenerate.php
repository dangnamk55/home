<?php

namespace App\Models;

use Cocur\Slugify\Slugify;

trait AliasGenerate
{
    public function aliasOnCreate()
    {

        $slug = new Slugify();

        $alias = $slug->slugify($this->name);
        $count = self::whereRaw("alias RLIKE '^{$alias}(-[0-9]+)?$'")->count();
        $this->alias = $count ? "{$alias}-{$count}" : $alias;
    }
}