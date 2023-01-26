<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory; 
    protected $table = 'leaves';
    protected $primaryKey = 'leave_id';

    protected $fillable = [
        'user_id',
        'resone',
        'start_date',
        'end_date',
    ];

    /* reletion pepartment */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
