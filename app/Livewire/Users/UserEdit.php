<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $user;

    public $name;

    public $email;

    public $password;

    public $confirm_password;

    public function mount($id): void
    {
        $this->user = User::findOrFail($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function render()
    {
        return view('livewire.users.user-edit');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'same:confirm_password',
        ]);

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        if ($this->password) {
            $this->user->password = bcrypt($this->password);
        }
        $this->user->save();

        return to_route('users.index')->with('success', 'User updated successfully.');
    }
}
