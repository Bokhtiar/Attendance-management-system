<?php

namespace App\Traits\Network;

use App\Models\Department;

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
