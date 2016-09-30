<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $table = 'roles';

    public function userrole()
    {
        return $this->belongsToMany('App\User', 'roles', 'role_id', 'user_id');
    }
}