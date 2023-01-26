<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $table = 'salaries';
    protected $primaryKey = 'salary_id';

    protected $fillable = [
        'user_id',
        'amount',
        'created_by',
    ];

    /* reletion pepartment */
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
