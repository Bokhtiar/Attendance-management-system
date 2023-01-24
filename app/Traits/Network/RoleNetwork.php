<?php

namespace App\Traits\Network;

use App\Models\Role;

trait RoleNetwork
{
    /* display a resouce list */
    public function RoleList()
    {
        return Role::all();
    }
 
    /* store a newly resource*/
    public function ResourceStoreRole($request, $role = null)
    {
        return array(
            'name' => $request->name,
        );
    }

    /* store resource */
    public function RoleStore($request)
    {
        return Role::create($this->ResourceStoreRole($request));
    }

    /* single resource show */
    public function RoleFindById($role_id)
    {
        return Role::find($role_id);
    }

    /* resource update */
    public function RoleUpdate($request, $id)
    {
        $role = Role::find($id);
        return $role->update($this->ResourceStoreRole($request, $role));
    }
}
