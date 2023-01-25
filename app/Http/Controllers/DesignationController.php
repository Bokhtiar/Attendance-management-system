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

     /* Display the specified resource. */
     public function show($id)
     {
         try {
             $show = $this->DesignationFindById($id);
             return view('modules.designation.show', compact('show'));
         } catch (\Throwable $th) {
             throw $th;
         }
     }
 
     /* Show the form for editing the specified resource. */
     public function edit($id)
     {
         try {
            $departments = $this->DepartmentList();
            $designations = $this->DesignationList();
             $edit = $this->DesignationFindById($id);
             return view('modules.designation.index', compact('departments', 'designations', 'edit'));
         } catch (\Throwable $th) {
             throw $th;
         }
     }
 
     /* Update the specified resource in storage. */
     public function update(DesignationValidation $request, $id)
     {
         try {
             $this->DesignationUpdate($request, $id);
             return redirect()->route('designation.index')->with('success', 'Designation Updated.');
         } catch (\Throwable $th) {
             throw $th;
         }
     }
 
     /* Remove the specified resource from storage. */
     public function destroy($id)
     {
         try {
             $this->DesignationFindById($id)->delete();
             return redirect()->back()->with('success', 'Designation Deleted.');
         } catch (\Throwable $th) {
             throw $th;
         }
     }
}
