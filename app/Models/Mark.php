<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{

    protected $fillable=['student_id','subject_id','mark','id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}