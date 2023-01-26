<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalaryValidation;
use App\Traits\Network\SalaryNetwork;
use App\Traits\Network\UserNetwork;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    use SalaryNetwork, UserNetwork;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $users = $this->userList();
            $salaries = $this->SalaryList();
            return view('modules.salary.index', compact('salaries', 'users'));
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
    public function store(SalaryValidation $request)
    {
        try {
            $this->SalaryStore($request);
            return redirect()->route('salary.index')->with('success', 'Salary Created.');
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
            $show = $this->SalaryFindById($id);
            return view('modules.salary.show', compact('show'));
        } catch (\Throwable $th) {
            //throw $th;
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
            $users = $this->userList();
            $salaries = $this->SalaryList();
            $edit = $this->SalaryFindById($id);
            return view('modules.salary.index', compact('salaries', 'users', 'edit'));
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
    public function update(Request $request, $id)
    {
        try {
            $this->SalaryUpdate($request, $id);
            return redirect()->route('salary.index')->with('success', "Salary updated.");
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
            $this->SalaryFindById($id)->delete();
            return redirect()->route('salary.index')->with('success', "Salary deleted.");
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
