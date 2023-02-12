<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public static function defaultRoles()
    {
        return [
            'admin',
            'student'
        ];
    }


    public function users()
    {
        return $this->hasMany(User::class);
    }
}
