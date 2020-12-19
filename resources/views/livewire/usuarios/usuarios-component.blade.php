<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Usuarios
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
            
            <!-- 
            <button wire:click='create' class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded my-3">Nuevo Registro</button>
            -->



        
        


            <table class="min-w-full divide-y divide-gray-200" style="width:100%;font-size:11px !important">
                <thead>
                    <tr class="bg-gray-100">
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            NO.
                        </th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NAME</th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">EMAIL</th>
                        <th scope="col" class="py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PASSWORD</th>
                        
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ACCIÓN</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $usuario->id }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $usuario->name }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $usuario->email }}</td>
                        <td class="py-4 whitespace-nowrap text-sm text-gray-500">{{ $usuario->password }}</td>
                       
                        <td class="px-4 whitespace-nowrap text-sm text-gray-500">
                        <button wire:click="edit({{ $usuario->id }})" class="">EDITAR</button>
                            <button wire:click="delete({{ $usuario->id }})" class="">ELIMINAR</button>
                            <button wire:click="delete({{ $usuario->id }})" class="">ROLES</button>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
