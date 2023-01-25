<?php

namespace App\Traits\Network;

use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

trait AttendanceNetwork
{
    /* display a resouce list */
    public function AttendanceList()
    {
        if (Auth::user()->role_id == 1) {
            return Attendance::latest()->where('user_id', Auth::user()->id)->get();
        } else {
            return Attendance::latest()->get();
        }
    }

    /* store a newly resource punch in*/
    public function ResourceStoreAttendancePunchIn()
    {

        $todayTime = Carbon::now()->format('h:i A');
        $currentTime = Carbon::now();
        $date = $currentTime->toArray();

        $ip = '103.147.41.145'; //For static IP address get
        //$ip = request()->ip(); //Dynamic IP address get
        $data = \Location::get($ip);

        return array(
            'user_id' => Auth::id(),
            'in' => $todayTime,
            'date' => $date['day'],
            'month' => $date['month'],
            'year' => $date['year'],
            'location' => $data->countryName . ' ' . $data->regionName . ' ' . $data->cityName . ' ' . $data->zipCode
        );
    }

    /* store resource */
    public function AttendancePunchIn()
    {
        return Attendance::create($this->ResourceStoreAttendancePunchIn());
    }

    public function AttendancePunchOut($id)
    {
        $todayTime = Carbon::now()->format('h:i A');
        $attendance = Attendance::find($id);
        return $attendance->update([
            'out' => $todayTime,
        ]);
    }

    // /* single resource show */
    // public function DepartmentFindById($department_id)
    // {
    //     return Department::find($department_id);
    // }

    // /* resource update */
    // public function DepartmentUpdate($request, $id)
    // {
    //     $department = Department::find($id);
    //     return $department->update($this->ResourceStoreDepartment($request, $department));
    // }
}
