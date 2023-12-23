<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['student_id', 'subject', 'score', 'date_received'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
