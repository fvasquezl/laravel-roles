<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleIndex extends Component
{
    public function render()
    {
        $roles = Role::all();

        return view('livewire.roles.role-index', compact('roles'));
    }
}
