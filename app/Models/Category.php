<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function job()
    {
        return $this->hasMany(Job::class,'document_id','id');
    }
    
}
