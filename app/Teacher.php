<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name', 'subject', 'qualification','nic_no','phone','district','email'
    ];
}
