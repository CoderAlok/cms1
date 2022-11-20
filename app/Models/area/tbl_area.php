<?php

namespace App\Models\area;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tbl_area extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = "area_id";

}
