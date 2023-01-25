<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentValidation;
use App\Traits\Network\DepartmentNetwork;
use COM;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use DepartmentNetwork;

    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $departments = $this->DepartmentList();
            return view('modules.department.index', compact('departments'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Store a newly created resource in storage. */
    public function store(DepartmentValidation $request)
    {
        try {
            $this->DepartmentStore($request);
            return redirect()->back()->with('success', 'Department Created.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show($id)
    {
        try {
            $show = $this->DepartmentFindById($id);
            return view('modules.department.show', compact('show'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $departments = $this->DepartmentList();
            $edit = $this->DepartmentFindById($id);
            return view('modules.department.index', compact('departments', 'edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentValidation $request, $id)
    {
        try {
            $this->DepartmentUpdate($request, $id);
            return redirect()->route('department.index')->with('success', 'Department Updated.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->DepartmentFindById($id)->delete();
            return redirect()->back()->with('success', 'Department Deleted.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
