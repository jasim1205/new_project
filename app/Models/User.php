<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Model
{
    use HasFactory,SoftDeletes;

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function voucher()
    {
        return $this->hasMany(Voucher::class, 'employee_id','id');
    }

    public function fundDistributions()
    {
        return $this->hasMany(FundDistribution::class, 'employee_id');
    }
}
