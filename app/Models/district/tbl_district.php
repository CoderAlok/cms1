<?php

namespace App\Models\district;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tbl_district extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = "id";
    protected $table = "tbl_district";
    protected $fillable = ['name', 'state_id'];
}
