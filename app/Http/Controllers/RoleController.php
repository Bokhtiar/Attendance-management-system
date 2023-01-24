<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleValidation;
use App\Traits\Network\RoleNetwork;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    use RoleNetwork;
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $roles = $this->RoleList();
            return view('modules.role.index', compact('roles'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource */
    public function create()
    {
        try {
            return view('modules.role.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Store a newly created resource in storage. */
    public function store(RoleValidation $request)
    {
        try {
            $this->RoleStore($request); 
            return redirect()->route('role.index')->with('success', "Role created.");
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show($id)
    {
        try {
            $show = $this->RoleFindById($id);
            return view('modules.role.show', compact('show'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        try {
            $roles = $this->RoleList();
            $edit = $this->RoleFindById($id);
            return view('modules.role.index', compact('edit', 'roles'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, $id)
    {
        try {
            $this->RoleUpdate($request, $id);
            return redirect()->route('role.index')->with('success', 'Role updated.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        try {
            $this->RoleFindById($id)->delete();
            return back()->with('success', 'Role deleted');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
