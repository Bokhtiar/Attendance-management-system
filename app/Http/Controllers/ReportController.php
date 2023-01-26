<?php

namespace App\Http\Controllers;

use App\Traits\Network\AttendanceNetwork;
use App\Traits\Network\ReportNetwork;
use App\Traits\Network\UserNetwork;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    use AttendanceNetwork, UserNetwork, ReportNetwork;

    /* Show the form for individual report.*/
    public function individual(Request $request)
    {
        $users = $this->userList();
        if($request->user_id){
            $attendances = $this->IndividualReport($request->user_id);
        }else{
            $attendances = $this->AttendanceList();
        }
        return view('modules.report.individual', compact('attendances', 'users'));
    }

    /* show the form form summary report.*/
    public function summary()
    {
        return redirect()->route('attendance.index');
    }
}
