<?php

namespace App\Traits\Network;

use App\Models\Leave;
use Illuminate\Support\Facades\Auth;

trait LeaveNetwork
{
    /* display a resouce list */
    public function LeaveList()
    {
        if(Auth::user()->role_id == 1)
        {
            return Leave::latest()->where('user_id', Auth::id())->get();
        }else{
            return Leave::latest()->get();
        }
        
    }
 
    /* store a newly resource*/
    public function ResourceStoreLeave($request)
    {
        return array(
            'user_id' => Auth::id(),
            'resone' => $request->resone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        );
    }

    /* store resource */
    public function LeaveStore($request)
    {
        return Leave::create($this->ResourceStoreLeave($request));
    }

    /* single resource show */
    public function LeaveFindById($leave_id)
    {
        return Leave::find($leave_id);
    }

    /* resource update */
    public function LeaveUpdate($request, $id)
    {
        $leave = Leave::find($id);
        return $leave->update($this->ResourceStoreLeave($request));
    }
}
