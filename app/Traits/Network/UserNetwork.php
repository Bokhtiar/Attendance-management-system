<?php

namespace App\Traits\Network;

use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

trait UserNetwork
{
    /* list of Room */
    public function userList()
    {
        return User::where('role_id',1)->get();
    }


    /* store resource database field*/
    public function ResourceStoreUser($request, $user=null){
        return array(
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $request->image,
            'permanent_address' => $request->permanent_address,
            'present_address' => $request->present_address,
            // 'created_by' => Auth::user()->id,
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
    public function RoomUpdate($request, $user_id)
    {
        $user = User::find($user_id);
        return $user->update($this->ResourceStoreUser($request, $user));
    }
}