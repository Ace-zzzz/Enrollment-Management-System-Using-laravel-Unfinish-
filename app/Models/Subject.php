<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subject';
    protected $fillable = [
        'Subject_ID', 'Subject_Name', 'GradeLevel'
    ];
    
    // protected $primaryKey = 'LRN';

}
