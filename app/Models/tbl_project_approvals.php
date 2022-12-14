<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tbl_project_approvals extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'project_id', 'type', 'account_state', 'account_id', 'account_type', 'is_mapped',
    ];
    protected $hidden = [
        'created_by', 'updated_by', 'created_at', 'updated_at',
    ];

    // public function get()
    // {}
}
