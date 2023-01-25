<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserValidation;
use App\Models\User;
use App\Traits\Network\DesignationNetwork;
use App\Traits\Network\UserNetwork;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use UserNetwork, DesignationNetwork;
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
            $designations = $this->DesignationList();
            return view('modules.user.create', compact('designations'));
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
            $designations = $this->DesignationList();
            $edit = $this->UserFindById($id);
            return view('modules.user.create', compact('edit', 'designations'));
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
            $path = public_path() . "/images/users/" . $user->image;
            unlink($path);

            $this->UserFindById($id)->delete();
            return back()->with('success', 'Employee deleted');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* user profile  */
    public function profile()
    {
        try {
            $designations = $this->DesignationList();
            $user = $this->UserFindById(Auth::id());
            return view('modules.user.profile', compact('user', 'designations'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* change password */
    public function change_password(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedpassword = Auth::user()->password;

        if (Hash::check($request->old_password, $hashedpassword)) {
            if (!Hash::check($request->password, $hashedpassword)) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('login');
            } else {
                return redirect()->back()->with('warning', 'Cureent Password match');;
            }
        } else {
            return redirect()->back()->with('warning', 'Password dont match');
        }
    }

    /* auth logout */
    public function logouts()
    {
        Auth::logout();
        return redirect('/');
    }
}
