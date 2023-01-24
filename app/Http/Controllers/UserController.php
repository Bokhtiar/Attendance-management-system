<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidation;
use App\Traits\Network\UserNetwork;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use UserNetwork;
    /* Display a listing of the resource. */
    public function index()
    {
        //
    }

    /* Show the form for creating a new resource */
    public function create()
    {
        return view('modules.user.create');
    }

    /* Store a newly created resource in storage. */
    public function store(UserValidation $request)
    {
        try {
            $this->UserStore($request);
            return redirect()->route('user.index')->with('success', "User created.");
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show($id)
    {
        //
    }

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        //
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, $id)
    {
        //
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        //
    }
}
