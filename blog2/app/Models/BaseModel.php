<?php
/**
 * Created by PhpStorm.
 * User: chungvh
 * Date: 19/10/2017
 * Time: 16:48
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public static $displayName = 'name';
    public $optionCondition = [];

    public static function findOptions()
    {
        $items = self::all();
        $resultSet = [];
        foreach ($items as $item) {
            $resultSet[$item->id] = $item->{self::$displayName};
        }
        return $resultSet;
    }
}