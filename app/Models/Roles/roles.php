<?php

namespace App\Models\Roles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "roles";
    protected $fillable = ['name', 'guard_name', 'created_by', 'updated_by'];
    // protected $hidden = ['created_by', 'updated_by'];

    
}
