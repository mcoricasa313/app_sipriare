<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
          Mantenimiento de Roles
    </h2>
   
</x-slot>
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-4 lg:px-8">
        <div class="px-4 py-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
            @if (session()->has('message'))
                <div class="px-4 py-3 my-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            
            <!-- 
            <button wire:click='create' class="px-4 py-1 my-3 font-bold text-white bg-red-500 rounded hover:bg-red-700">Nuevo Registro</button>
            -->


            <button wire:click='create' class="px-4 py-1 my-3 font-bold text-white bg-red-500 rounded hover:bg-red-700">Nuevo Rol</button>

        
        


            <table class="min-w-full divide-y divide-gray-200" style="width:100%;font-size:11px !important">
                <thead>
                    <tr class="bg-gray-100">
                        <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                            NO.
                        </th>
                        <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">DESCRIPCION</th>
                        <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">ESTADO</th>                    
                        <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">ACCIÓN</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($roles as $rol)
                    <tr>
                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $rol->id }}</td>
                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $rol->descripcion }}</td>
                        {{-- <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $rol->flag }}</td> --}}
                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                        @if ($rol->flag ==1)
                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">
                            Activo
                        </span>
                        @endif
                        </td>

                        <td class="px-4 text-sm text-gray-500 whitespace-nowrap">
                            <button wire:click="edit({{ $rol->id }})" class="px-4 py-2 text-xs font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                Editar
                              </button>
                              <button wire:click="edit({{ $rol->id }})" class="px-4 py-2 text-xs font-bold text-white bg-red-500 rounded hover:bg-red-700">
                                Eliminar
                              </button>
                        {{-- <button wire:click="edit({{ $rol->id }})" class="">EDITAR</button>
                            <button wire:click="delete({{ $rol->id }})" class="">ELIMINAR</button>                           --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
