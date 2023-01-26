<?php

namespace App\Traits\Network;

use App\Models\Salary;
use Illuminate\Support\Facades\Auth;

trait SalaryNetwork
{
    /* display a resouce list */
    public function SalaryList()
    {
        if(Auth::user()->role_id == 1)
        {
            return Salary::latest()->where('user_id', Auth::id())->get();
        }else{
            return Salary::latest()->get();
        }
        
    }
 
    /* store a newly resource*/
    public function ResourceStoreSalary($request)
    {
        return array(
            'user_id' => $request->user_id,
            'created_by' => Auth::id(),
            'amount' => $request->amount,
        );
    }

    /* store resource */
    public function SalaryStore($request)
    {
        return Salary::create($this->ResourceStoreSalary($request));
    }

    /* single resource show */
    public function SalaryFindById($id)
    {
        return Salary::find($id);
    }

    /* resource update */
    public function SalaryUpdate($request, $id)
    {
        $salary = Salary::find($id);
        return $salary->update($this->ResourceStoreSalary($request));
    }
}
