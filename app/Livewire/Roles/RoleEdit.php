<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleEdit extends Component
{
    public $name;

    public $role;

    public $allPermissions = [];

    public $permissions = [];

    public function mount($id)
    {
        $this->role = Role::findById($id);
        $this->name = $this->role->name;
        $this->permissions = $this->role->permissions()->pluck('name')->toArray();
        $this->allPermissions = Permission::get();
    }

    public function render()
    {
        return view('livewire.roles.role-edit');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required:unique:roles,name,'.$this->role->id,
            'permissions' => 'required',
        ]);

        $this->role->name = $this->name;
        $this->role->save();

        $this->role->syncPermissions($this->permissions);

        return to_route('roles.index')->with('success', 'Role updated successfully.');
    }
}
