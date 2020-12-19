@include('sweetalert::alert')




<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Mesa de Partes - Registro de Expedientes
    </h2>

</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click='create' class="bg-red-700 hover:bg-red-700 text-white text-xs font-bold py-1 px-4 rounded my-3">Nuevo Registro</button>


                <div wire:loading>
                    Cargando...

                </div>


            @if($isOpen)
                @include('livewire.expedientes.create')
            @endif


                @if($isOpenRecepcionar)
                    @include('livewire.expedientes.recepcionar')
                @endif

                @if($isOpenDetalles)
                    @include('livewire.expedientes.detalles')
                @endif

            <div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
                        <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">
                            NO.
                        </th>
                        <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">
                            EXPEDIENTE
                        </th>
                        <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">ASUNTO</th>
                        <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">FOLIOS</th>
                        <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">REMITENTE</th>
                        <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">PRIORIDAD</th>
                        <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">PRESICION</th>
                        <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">UNIDAD ORGÁNICA</th>
                        <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">ESTADO</th>
                        <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">OBSERVACIÓN</th>
                    <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">DETALLES</th>
                    <th scope="col" class="px-1 py-3 bg-red-700 text-center text-xs font-small text-white uppercase tracking-wider">ACCIÓN</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach($expedientes as $expediente)

            <tr>
              <td class="px-6 py-4 text-center text-xs whitespace-nowrap">


                <div class="text-xstext-center text-gray-900">{{ $expediente->id }}</div>


              </td>
              <td class="px-1 py-4 text-xs text-center">
                  <div class="text-xs text-center text-gray-900">
                      {{ $expediente->numero_expediente }}
                  </div>
                  <div class="text-xs text-center text-gray-500">
                      {{ $expediente->numero_documento }}
                  </div>


              </td>
                <td class="px-1 py-4 whitespace-nowrap text-center text-xs text-gray-500">


                  <div class="text-xs text-gray-500">
                      {{ $expediente->asunto }}
                  </div>
              </td>
              <td class="px-1 py-4 whitespace-nowrap text-center text-xs text-gray-500">
                  {{ $expediente->folios }}
              </td>
              <td class="px-1 py-4 whitespace-nowrap text-center text-xs font-medium">


                  {{ $expediente->remitente }}
              </td>
                <td class="px-1 py-4 whitespace-nowrap text-center text-xs font-medium">
                    <?php if($expediente->prioridad==1){ ?>
                        <span class="px-1 inline-flex text-xs leading-5 font-semibold bg-red-100 text-green-800">
                            MUY URGENTE
                        </span>
                    <?php }else{ ?>
                        <span class="px-1 inline-flex text-xs leading-5 font-semibold bg-yellow-100 text-red-800">
                            NORMAL
                        </span>
                    <?php } ?>
                </td>
                <td class="px-1 py-4 whitespace-nowrap text-center text-xs font-medium">
                    {{ round(($expediente->presicion)*100,0) }}%
                </td>
                <td class="px-1 py-4 whitespace-nowrap text-center text-xs font-medium">
                    {{ $expediente->uo_destino }}
                </td>
                <td class="px-1 py-4 whitespace-nowrap text-center text-xs font-medium">
                    <?php if($expediente->estado==1){ ?>

                            <span class="px-1 inline-flex text-xs leading-5 font-semibold bg-green-100 text-green-800">
                                Activo
                            </span>

                    <?php }else{ ?>
                            <span class="px-1 inline-flex text-xs leading-5 font-semibold bg-red-100 text-red-800">
                                Desactivado
                            </span>
                    <?php } ?>
                </td>
                <td class="px-1 py-4 whitespace-nowrap text-center text-xs font-medium">
                    {{ $expediente->observacion }}
                </td>
                <td class="px-1 py-4 whitespace-nowrap text-center text-xs font-medium">
                    <button wire:click="detalleExpediente({{ $expediente->id }})" class="text-xs text-white px-2 py-1 bg-red-600 rounded">Detalles</button>
                </td>
                <td class="px-1 py-4 whitespace-nowrap text-center text-xs font-medium">
                    <button wire:click="recepcionar({{ $expediente->id }})" class="text-xs text-white px-2 py-1 bg-green-400 rounded">Recepcionar</button>
                    <button wire:click="edit({{ $expediente->id }})" class="text-white-600 hover:text-white-900 text-xs text-white px-2 py-1 bg-blue-600 rounded">Editar</button>
                    <button wire:click="delete({{ $expediente->id }})" class="text-white-600 hover:text-white-900 text-xs text-white px-2 py-1 bg-red-700 rounded">Eliminar</button>
                </td>
            </tr>
            @endforeach
          {{ $expedientes->links() }}



            <!-- More rows... -->
          </tbody>
        </table>

      </div>

    </div>

  </div>
</div>


        </div>
    </div>
</div>
