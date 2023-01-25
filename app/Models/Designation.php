<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Designation extends Model
{ 
    use HasFactory;
    protected $table = 'designations';
    protected $primaryKey = 'designation_id';

    protected $fillable = [
        'name',
        'department_id',
        'created_by',
    ];

    /* reletion pepartment */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }
}
