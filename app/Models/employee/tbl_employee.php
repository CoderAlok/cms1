<?php

namespace App\Models\employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tbl_employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = "id";
    protected $table = "tbl_employees";
    protected $fillable = [
        'name', 'departmentId', 'salary', 'area_type', 'state_id', 'district_id', 'created_by', 'updated_by',
    ];
    protected $hidden = [
        'created_by', 'updated_by', 'created_at', 'updated_at',
    ];

    public function getState()
    {}
}
