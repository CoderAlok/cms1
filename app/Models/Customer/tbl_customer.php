<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User AS Users;

class tbl_customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tbl_customers';
    protected $fillable = ['name', 'age', 'address', 'dob', 'email', 'created_by', 'updated_by'];

    public function users_data(){
        return $this->hasOne(Users::class, 'id', 'created_by')->select('id', 'name');
    }
}
