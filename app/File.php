<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'uploader', 'upload_file', 'title','description'
    ];
}
