<?php
namespace App\Services\Permissions\Traits;

use App\Role;

trait HasRoles{
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function giveRolesTo(...$roles){
        $roles=$this->getAllRoles($roles);
        if($roles->isEmpty()) return $this;
        $this->roles()->syncWithoutDetaching($roles);
        return $this;
    }

    protected function getAllRoles(array $roles){
        return Role::whereIn('name',array_flatten($roles))->get();
    }
}
