<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleIndex extends Component
{
    public function render()
    {
        $roles = Role::with("permissions")->get();

        return view('livewire.roles.role-index', compact('roles'));
    }

    public function delete($id)
    {
        $role = Role::findById($id);
        $role->delete();

        return to_route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
