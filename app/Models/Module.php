<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public $timestamps = false;

    public static function defaultModules(){
        return [
            1 => 'Introduction to AI',
            2 => 'Understanding AI',
            3 => 'Plan AI',
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function chapters()
    {
        return $this->hasMany(Lesson::class);
    }
}
