<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MAttendance extends Model
{
    protected $table = 'leave_attendence';
    protected $fillable = ['start_date', 'end_date', 'description', 'leave_type', 'user_id'];
}
