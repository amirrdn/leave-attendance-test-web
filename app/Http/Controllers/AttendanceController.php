<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Attendance;

use Validator;

class AttendanceController extends Controller
{
    protected $attend;

    public function __construct()
    {
        $this->attend           = new Attendance;
    }
    public function index(Request $request)
    {
        $attendence             = $this->attend->Getattendence()
                                ->select('leave_attendence.*', 'users.name', 'leave_type.type_name')
                                ->groupBY('leave_attendence.id')
                                ->paginate($request->per_page);
        return response()->json($attendence);
    }
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'start_date'=>'required',
            'end_date'=>'required',
            'description' => 'required',
            'leave_type' => 'required',
            'user_id' => 'required',
        ]);
        if ($validated->fails()) {
            $message = $validated->errors();
            return response()->json($message);
        }
        $attendinsert           = $this->attend->insertQuery($request);
        return response()->json($attendinsert);
    }
    public function view($id)
    {
        $attendview             = $this->attend->Getattendence()
                                ->where('leave_attendence.id', $id)
                                ->select('leave_attendence.*', 'users.name', 'leave_type.type_name')
                                ->first();

        return response()->json($attendview);
    }
}
