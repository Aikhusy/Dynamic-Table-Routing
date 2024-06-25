<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected static $forms = [['type' => 'text', 'name' => 'title'], ['type' => 'number', 'name' => 'rating']];

    public static function getForms()
    {
        return self::$forms;
    }
}
