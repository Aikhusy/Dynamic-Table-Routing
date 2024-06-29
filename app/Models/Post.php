<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected static $forms = [['type' => 'text', 'name' => 'title'], ['type' => 'number', 'name' => 'rating']];
    protected $fillable = ['title','rating'];
    public static function getForms()
    {
        return self::$forms;
    }
}
