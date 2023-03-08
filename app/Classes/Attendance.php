<?php

namespace App\Classes;
use Illuminate\Http\Request;

use App\MAttendance;

class Attendance{

    public function Getattendence(){
        return MAttendance::join('users', 'leave_attendence.user_id', 'users.id')
            ->join('leave_type', 'leave_attendence.leave_type', 'leave_type.id');
    }
    public function insertQuery(Request $request)
    {
        $attend                 = new MAttendance;

        $attend->start_date     = date('Y-m-d', strtotime($request->start_date));
        $attend->end_date       = date('Y-m-d', strtotime($request->end_date));
        $attend->description    = $request->description;
        $attend->leave_type     = $request->leave_type;
        $attend->user_id        = $request->user_id;

        $attend->save();
        return $attend;
    }
}
