<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Traits\Network\AttendanceNetwork;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    use AttendanceNetwork;
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $attendances = $this->AttendanceList();
            return view('modules.attendance.index', compact('attendances'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource.*/
    public function create()
    {
        try {
            return view('modules.attendance.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Store a newly created resource in punchIn.*/
    public function punchIn()
    {
        $currentTime = Carbon::now();
        $date = $currentTime->toArray();
        $alreadyPunchIn =  Attendance::where('user_id', Auth::id())->where('date', $date['day'])->where('month', $date['month'])->where('year', $date['year'])->first();
        if ($alreadyPunchIn) {
            return redirect()->route('attendance.index')->with('warning', "Already punch in");
        }
        $this->AttendancePunchIn();
        return redirect()->route('attendance.index')->with('success', "Welcome to grapView");
    }

    /* Store a newly created resource in punchOut.*/
    public function punchOut()
    {
        try {
            $currentTime = Carbon::now();
            $date = $currentTime->toArray();
            $PunchIn =  Attendance::where('user_id', Auth::id())->where('date', $date['day'])->where('month', $date['month'])->where('year', $date['year'])->whereNotNull('in')->whereNull('out')->first();
            if ($PunchIn) {
                $this->AttendancePunchOut($PunchIn->attendance_id);
                return redirect()->route('attendance.index')->with('success', 'Thank you');
            }
            return redirect()->route('attendance.index')->with('warning', "Someting went wrong.");
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /* Display the specified resource. */
    public function show($id)
    {
        try {
            $item = Attendance::find($id);
            return view('modules.attendance.show', compact('item'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
