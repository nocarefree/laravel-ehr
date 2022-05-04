<?php

namespace Ncf\Lehr;

use \Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    function users()
    {
        return $this->belongsToMany(Group::class, 'user_group', 'group_id', 'user_id');
    }
}