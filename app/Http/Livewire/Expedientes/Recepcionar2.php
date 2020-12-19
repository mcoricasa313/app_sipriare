<?php

namespace App\Http\Livewire\Expedientes;

use App\Models\unidadorganica;
use Livewire\Component;

class Recepcionar2 extends Component
{
    public $listadoUOS = [];
    public $unidadorganica = "";

    public function render()
    {
        $this->listadoUOS = unidadorganica::all();

        $this->unidadorganica=="feralloos";

        return view('livewire.expedientes.recepcionar')->with(listadoUOS);
    }
}
