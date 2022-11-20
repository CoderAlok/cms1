<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tbl_distributors extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'sap_code', 'username', 'password', 'location', 'state_id', 'district_id', 'product'
    ];
}
