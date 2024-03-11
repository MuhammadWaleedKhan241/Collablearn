<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Teacher extends Authenticatable
{
    use HasFactory,Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
    protected $table= 'teachers';
    
}