<?php

namespace App\Models\department;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tbl_department extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'department_id';
}
