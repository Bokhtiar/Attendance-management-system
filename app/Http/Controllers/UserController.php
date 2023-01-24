<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserValidation;
use App\Models\User;
use App\Traits\Network\UserNetwork;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use UserNetwork;
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $users = $this->userList();
            return view('modules.user.index', compact('users'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource */
    public function create()
    {
        try {
            return view('modules.user.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Store a newly created resource in storage. */
    public function store(UserValidation $request)
    {
        try {
            $this->UserStore($request);
            return redirect()->route('user.index')->with('success', "Employee created.");
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show($id)
    {
        try {
            $show = $this->UserFindById($id);
            return view('modules.user.show', compact('show'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        try {
            $edit = $this->UserFindById($id);
            return view('modules.user.create', compact('edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, $id)
    {
        try {
            $this->UserUpdate($request, $id);
            return redirect()->route('user.index')->with('success', 'Employee updated.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        try {
            $user = User::find($id);
            $path = public_path()."/images/users/".$user->image;
            unlink($path);

            $this->UserFindById($id)->delete();
            return back()->with('success', 'Employee deleted');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* user profile  */
    public function profile(){
        try {
            $edit = $this->UserFindById(Auth::id());
            return view('modules.user.create', compact('edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
