<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MTypeLeave extends Model
{
    protected $table    = 'leave_type';
    protected $fillable = ['type_name'];
}
