<?php

class Role {
    public $role_id;
    public $name;
    public $permissions;//Permissions array

    public function hasPerm($permission){
        return isset($this->permissions[$permission]);
    }
    public function set_permissions($permissions){
        $this->permissions= $permissions;
    }
}