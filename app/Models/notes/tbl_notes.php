<?php

namespace App\Models\notes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tbl_notes extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['id'];
}
