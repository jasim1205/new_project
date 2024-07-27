<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commodity extends Model
{
    use HasFactory,SoftDeletes;

    // public function jobs(){
    //     return $this->belongsTo(Job::class);
    // }

     public function requisition()
    {
        return $this->belongsTo(Requisition::class, 'requisition_id');
    }
}
