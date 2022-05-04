<?php

namespace Ncf\Lehr;

use \Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    function users()
    {
        return $this->belongsToMany(Users::class, 'user_group', 'user_id', 'group_id');
    }    
}