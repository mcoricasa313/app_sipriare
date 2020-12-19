<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;
use App\Models\User;

class UsuariosComponent extends Component
{

    public $usuarios;

    public function render()
    {
        $this->usuarios = User::all();
        return view('livewire.usuarios.usuarios-component');
    }
}
