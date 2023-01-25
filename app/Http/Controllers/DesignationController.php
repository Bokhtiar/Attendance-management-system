<?php

namespace App\Http\Controllers;

use App\Http\Requests\DesignationValidation;
use App\Traits\Network\DepartmentNetwork;
use App\Traits\Network\DesignationNetwork;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    use DesignationNetwork, DepartmentNetwork;

    /* disply a list of resource */
    public function index()
    {
        try {
            $departments = $this->DepartmentList();
            $designations = $this->DesignationList();
            return view('modules.designation.index', compact('designations', 'departments'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Store a newly created resource in storage. */
    public function store(DesignationValidation $request)
    {
        try {
            $this->DesignationStore($request);
            return redirect()->back()->with('success', 'Designation Created.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
