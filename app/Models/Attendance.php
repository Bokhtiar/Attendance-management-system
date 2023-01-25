<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory; 
    protected $table = 'attendances';
    protected $primaryKey = 'attendance_id';

    protected $fillable = [
        'user_id',
        'in',
        'out',
        'date',
        'month',
        'year',
        'location',
    ];
}
