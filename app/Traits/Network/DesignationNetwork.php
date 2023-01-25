<?php

namespace App\Traits\Network;

use App\Models\Designation;
use Illuminate\Support\Facades\Auth;

trait DesignationNetwork
{
    /* display a resouce list */
    public function DesignationList()
    {
        return Designation::all();
    }

    /* store a newly resource*/
    public function ResourceStoreDesignation($request, $designation = null)
    {
        return array(
            'name' => $request->name,
            'department_id' => $request->department_id,
            'created_by' => Auth::id(),
        );
    }

    /* store resource */
    public function DesignationStore($request)
    {
        return Designation::create($this->ResourceStoreDesignation($request));
    }

    /* single resource show */
    public function DesignationFindById($designation_id)
    {
        return Designation::find($designation_id);
    }

    /* resource update */
    public function DesignationUpdate($request, $id)
    {
        $designation = Designation::find($id);
        return $designation->update($this->ResourceStoreDesignation($request, $designation));
    }
}