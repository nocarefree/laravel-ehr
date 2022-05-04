<?php

namespace Ncf\Lehr;

use \Illuminate\Database\Eloquent\Model;

class User extends Model
{
    function hasRole(Role $role)
    {
        return $this->roles->contains($role);
    }

    function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role', 'user_id', 'role_id');
    }
    
    function groups()
    {
        return $this->belongsToMany(Group::class, 'user_group', 'user_id', 'group_id');
    }
}