<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'course', 'specialty'];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
