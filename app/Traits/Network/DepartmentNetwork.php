<?php

namespace App\Traits\Network;

use App\Models\Department;
use Illuminate\Support\Facades\Auth;

trait DepartmentNetwork
{
    /* display a resouce list */
    public function DepartmentList()
    {
        return Department::all();
    }
 
    /* store a newly resource*/
    public function ResourceStoreDepartment($request, $department = null)
    {
        return array(
            'name' => $request->name,
            'created_by' => Auth::id(),
        );
    }

    /* store resource */
    public function DepartmentStore($request)
    {
        return Department::create($this->ResourceStoreDepartment($request));
    }

    /* single resource show */
    public function DepartmentFindById($department_id)
    {
        return Department::find($department_id);
    }

    /* resource update */
    public function DepartmentUpdate($request, $id)
    {
        $department = Department::find($id);
        return $department->update($this->ResourceStoreDepartment($request, $department));
    }
}
