<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $fillable = [
        'LRN', 'FirstName', 'LastName',
        'MiddleName', 'BirthDate', 'Gender',
        'Address', 'Contact_No', 'Email', 'NewEnrollees',
        'place_of_birth', 'parent_fname', 'parent_mname',
        'parent_lname', 'password_hash', 'GradeLevel'
    ];
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (is_null($model->GradeLevel)) {
                $model->GradeLevel = 7;
            }
        });
    }
    protected $primaryKey = 'LRN';

}
