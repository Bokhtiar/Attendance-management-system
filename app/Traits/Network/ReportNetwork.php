<?php

namespace App\Traits\Network;

use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

trait ReportNetwork
{
    /* display a resouce individual report */
    public function IndividualReport($id)
    {
        return Attendance::latest()->where('user_id', $id)->get();
    }

    public function SummaryReport()
    {
        return Attendance::latest()->get();
    }
}
