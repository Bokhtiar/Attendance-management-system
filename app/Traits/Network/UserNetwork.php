<?php

namespace App\Traits\Network;

use Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

trait UserNetwork
{
    /* display a resouce list */
    public function userList()
    {
        return User::where('role_id', 1)->get();
    }

    /* store a newly resource*/
    public function ResourceStoreUser($request, $user = null)
    {
        if ($request->hasFile('image')) {
            $image = Image::make($request->file('image'));
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $destinationPath = public_path('images/users/');
            $image->save($destinationPath . $imageName);
        } else {
            $imageName = $user->image;
        }

        return array(
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $imageName,
            'permanent_address' => $request->permanent_address,
            'present_address' => $request->present_address,
            'created_by' => Auth::user()->id,
            'designation_id' => $request->designation_id,
            'salary' => $request->salary,
            'password' => Hash::make($request->password),
        );
    }

    /* store resource */
    public function UserStore($request)
    {
        return User::create($this->ResourceStoreUser($request));
    }

    /* single resource show */
    public function UserFindById($user_id)
    {
        return User::find($user_id);
    }

    /* resource update */
    public function UserUpdate($request, $user_id)
    {
        $user = User::find($user_id);
        return $user->update($this->ResourceStoreUser($request, $user));
    }
}
