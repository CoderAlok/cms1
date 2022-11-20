<?php

namespace App\Models\state;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tbl_state extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = "state_id";
    protected $table = "tbl_state";
    protected $fillable = ['name'];
}
