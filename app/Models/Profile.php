<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable =[
           'first_name',
           'last_name',
           'dob',
           'website' ,
           'phone',
           'city',
           'age',
           'degree',
           'email',
           'freelance',
           'intro',
           'role',
           'img',
           'index_img',
    ];
}
