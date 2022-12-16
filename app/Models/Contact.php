<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = ['name', 'email', 'phone', 'subject', 'message', 'area_details'];
    protected $cast = [
        // 'area_details' => 'object',
        'area_details' => 'array',
    ];
}
