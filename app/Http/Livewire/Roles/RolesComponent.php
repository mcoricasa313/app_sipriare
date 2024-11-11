<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use App\Models\Roles;

class RolesComponent extends Component
{

    public $roles;

    public function render()
    {
        $this->roles = Roles::all();
        return view('livewire.roles.roles-component');
    }
}
