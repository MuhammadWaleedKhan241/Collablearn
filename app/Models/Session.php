<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
     public function Teacher(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }



     public function Casestudy(): HasMany
    {
        return $this->hasMany(Casestudy::class);
    }



    public function Casestudy(): HasMany
    {
        return $this->hasMany(Casestudy::class);
    }


    public function Student(): HasMany
    {
        return $this->hasMany(Student::class);
    }



}
