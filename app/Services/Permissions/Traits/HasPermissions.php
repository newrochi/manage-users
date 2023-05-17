<?php
namespace App\Services\Permissions\Traits;

use App\Permission;

trait HasPermissions{
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }

    public function givePermissionsTo(...$permissions){
        $permissions=$this->getAllPermissions($permissions);
        if($permissions->isEmpty()) return $this;
        $this->permissions()->syncWithoutDetaching($permissions);

        return $this;
    }

    protected function getAllPermissions(array $permissions){

        return Permission::whereIn('name',array_flatten($permissions))->get();
    }
}