<?php

namespace App\Http\Livewire\Expedientes;

use App\Models\funcionarios;
use App\Models\unidadorganica;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Expedientes;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class ExpedientesComponent extends Component
{


    public $idexpediente,$numero_expediente,$asunto,$numero_documento,$folios,$remitente,$prioridad,$uo_destino,$estado,$observacion,$presicion;
    use WithPagination;

    public $isOpen = 0;
    public $isOpenRecepcionar = 0;
    public $isOpenDetalles = 0;


    protected $listeners = ['showModal' => 'create', 'closeModal' => 'close','jefe'=>'obtenerDatosResponsable'];

    public $listadoUOS = [];
    public $listaResponsables = [];

    public $unidadorganica = "";
    public $responsable = "";

    public $detallesExpedientes;


    public function render()
    {
        //$this->expedientes = Expedientes::all();
        //Alert::success('Success Title', 'Success Message');

        //comentarndo

        $this->cargarDatosUnidades();
        $this->cargarResponsables($this->unidadorganica);

    // asdasd
        return view('livewire.expedientes.expedientes-component',
            [
                'expedientes'=>Expedientes::latest()->paginate(5)
            ]);


    }

    public function cargarResponsables($idunidad)
    {
        $this->listaResponsables = funcionarios::all();
        $far = funcionarios::all()->where('US_IDUNIDAD',$idunidad);
        //$far = $far->where('ESTADO','=','1');
        $this->responsable = $far;
    }

    public function cargarDatosUnidades()
    {
        $this->listadoUOS = unidadorganica::all()->where('ESTADO','=','1');

    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
        //$this->$fefefefe = "abrendod";
    }

    public function recepcionar()
    {
        $this->unidadorganica=="feralloos";

        $this->isOpenRecepcionar = true;

    }



    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->isOpenRecepcionar = false;
        $this->isOpenDetalles = false;

        //$this->render();
    }

    public function detalleExpediente($idexpedientevar)
    {
        $this->detallesExpedientes = Expedientes::all()->where('id','=',$idexpedientevar);
        $this->isOpenDetalles = true;
    }

    private function resetInputFields(){
        //$this->expediente = '';
        $this->numero_expediente = '';
        $this->asunto = '';
        $this->numero_documento = '';
        $this->folios = '';
        $this->remitente = '';
        $this->prioridad = '';
        $this->uo_destino = '';
        $this->estado = 1;
        $this->observacion = '';
        $this->idexpediente = '';
        $this->presicion = '';
    }

    public function store()
    {
        $this->validate([
            'asunto' => 'required',
            'numero_documento' => 'required',
            'folios' => 'required',
            'remitente' => 'required',
            'observacion' => 'required'

        ]);

        $response = Http::post('http://deploy-ml-model-mtc.herokuapp.com/predict', [
            'asunto' => $this->asunto,
            'institucion' => $this->asunto
        ]);
        $data = json_decode($response->getBody());
        $this->prioridad = $data->High_priority;
        $this->presicion = $data->High_priority_prob;

        Expedientes::updateOrCreate(['id' => $this->idexpediente], [
            'numero_expediente' => $this->numero_expediente,
            'asunto' => $this->asunto,
            'numero_documento' => $this->numero_documento,
            'folios' => $this->folios,
            'remitente' => $this->remitente,
            'observacion' => $this->observacion,
            'prioridad' => $this->prioridad,
            'uo_destino' => $this->uo_destino,
            'estado' => $this->estado,
            'presicion' => $this->presicion
        ]);

        session()->flash('message',
            $this->idexpediente ? 'Expediente Actualizado Correctamente.' : 'Expediente Creado Correctamente.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $expediente = Expedientes::findOrFail($id);

        $this->idexpediente =$expediente->id;
        $this->numero_expediente = $expediente->numero_expediente;
        $this->asunto = $expediente->asunto;
        $this->numero_documento = $expediente->numero_documento;
        $this->folios = $expediente->folios;
        $this->remitente = $expediente->remitente;
        $this->observacion = $expediente->observacion;
        $this->estado = $expediente->estado;
        //$this->prioridad = $expediente->prioridad;
        $this->uo_destino = $expediente->uo_destino;

        /*
        $response = Http::post('http://deploy-ml-model-mtc.herokuapp.com/predict', [
            'asunto' => $expediente->asunto
        ]);
        $data = json_decode($response->getBody());
        $this->prioridad = $data->High_priority_prob;
*/
        $this->openModal();
    }

    public function delete($id)
    {
        Expedientes::find($id)->delete();
        session()->flash('message', 'Expediente Eliminado Correctamente.');
    }

}
