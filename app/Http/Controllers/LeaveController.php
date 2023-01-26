<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeaveValidation;
use App\Models\Leave;
use App\Traits\Network\LeaveNetwork;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    use LeaveNetwork;

    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $leaves = $this->LeaveList();
            return view('modules.leave.index', compact('leaves'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        try {
            return view('modules.leave.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeaveValidation $request)
    {
        try {
            $this->LeaveStore($request);
            return redirect()->route('leave.index')->with('success', "Leave Application created");
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $show = $this->LeaveFindById($id);
            return view('modules.leave.show', compact('show'));
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
            $edit = $this->LeaveFindById($id);
            return view('modules.leave.create',compact('edit'));
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
    public function update(LeaveValidation $request, $id)
    {
        try {
            $this->LeaveUpdate($request, $id);
            return redirect()->route('leave.index')->with('success', 'Leave application updated');
        } catch (\Throwable $th) {
            //throw $th;
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
            $this->LeaveFindById($id)->delete();
            return redirect()->route('leave.index')->with('success', 'Leave application deleted');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
