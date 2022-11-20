<?php

namespace App\Models\Accounts;

use Distributors;
use District;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use State;

class tbl_dealers extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function getState()
    {
        return $this->hasOne(State::class, 'state_id', 'state_id');
    }

    public function getDistrict()
    {
        return $this->hasOne(District::class, 'id', 'district_id');
    }

    public function getDistributor()
    {
        return $this->hasOne(Distributors::class, 'distributor_id', 'distributor_id');
    }
}
