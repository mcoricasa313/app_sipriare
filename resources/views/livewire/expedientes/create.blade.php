


<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" id="modal-1" >
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle" role="dialog" aria-modal="true" aria-labelledby="modal-headline">




        <form>
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

          <div class="mt-10 sm:mt-0">
              <div class="md:grid md:grid-cols-3 md:gap-6">
                  <div class="md:col-span-1">
                      <div class="px-4 sm:px-0">
                          <h3 class="text-lg font-medium leading-6 text-gray-900">Registro de solicitud</h3>
                          <p class="mt-1 text-sm text-gray-600">
                              Reigstrar los datos de la solicitud.
                          </p>
                      </div>
                  </div>
                  <div class="mt-5 md:mt-0 md:col-span-2">
                      <form action="#" method="POST">
                          <div class="shadow overflow-hidden sm:rounded-md">
                              <div class="px-4 py-5 bg-white sm:p-6">
                                  <div class="grid grid-cols-6 gap-6">
                                      <input type="hidden" class="shadow px-3 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="id" placeholder="" wire:model.defer="idexpediente" readonly>



                                      <div class="col-span-6 sm:col-span-3">
                                          <label for="numero_documento" class="block text-sm font-medium text-gray-700">Número de Documento</label>
                                          <input type="text" class="shadow px-3 mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="exampleFormControlInput1" placeholder="Número de Documento" wire:model.defer="numero_documento">
                                          @error('numero_documento') <span class="text-red-500">{{ $message }}</span>@enderror
                                      </div>

                                      <div class="col-span-6 sm:col-span-3">
                                          <label for="last_name" class="block text-sm font-medium text-gray-700">Folios</label>
                                          <input type="number" class="shadow px-3 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="exampleFormControlInput1" placeholder="Folios" wire:model.defer="folios">
                                          @error('folios') <span class="text-red-500">{{ $message }}</span>@enderror
                                      </div>


                                      <div class="col-span-6">
                                          <label for="email_address" class="block text-sm font-medium text-gray-700">Asunto</label>
                                          <input type="text" class="shadow px-3 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="exampleFormControlInput1" placeholder="Asunto" wire:model.defer="asunto">
                                          @error('asunto') <span class="text-red-500">{{ $message }}</span>@enderror
                                      </div>

                                      <div class="col-span-6">
                                          <label for="country" class="block text-sm font-medium text-gray-700">Remitente</label>
                                          <select id="country" name="country" autocomplete="country" class="shadow px-3 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" wire:model.defer="remitente">
                                              <option>-- Seleccionar Entidad --</option>
                                              <option>CONGRESO</option>
                                              <option>PRESIDENCIA DE CONSEJO DE MINISTROS</option>
                                              <option>CONTRALORIA GENERAL</option>
                                              <option>DEFENSORIA DEL PUEBLO</option>
                                              <option>MINISTERIO PUBLICO</option>
                                              <option>MINISTERIO DE ECONOMIA Y FINANZAS</option>
                                          </select>
                                          @error('remitente') <span class="text-red-500">{{ $message }}</span>@enderror

                                      </div>

                                      <div class="col-span-6">
                                          <label for="street_address" class="block text-sm font-medium text-gray-700">Observaciones</label>
                                          <textarea class="shadow px-3 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="exampleFormControlInput2" wire:model.defer="observacion" placeholder="Observación"></textarea>
                                          @error('observacion') <span class="text-red-500">{{ $message }}</span>@enderror
                                      </div>

                                      <div class="col-span-6">
                                          <label for="street_address" class="block text-sm font-medium text-gray-700">Estado</label>
                                          <select name="estado" wire:model.defer="estado" class="shadow px-3 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                              <option value="1">Activo</option>
                                              <option value="0">Desactivado</option>
                                          </select>
                                          @error('estado') <span class="text-red-500">{{ $message }}</span>@enderror
                                      </div>

                                    <!--
                                      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                          <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                          <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                      </div>

                                      <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                          <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                                          <input type="text" name="state" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                      </div>

                                      <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                          <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                                          <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                      </div>
                                    -->

                                  </div>
                              </div>
                              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                  <!--
                                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                      Save
                                  </button>
                                  -->
                                  <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                      Grabar
                                  </button>
                                  <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                      Cancelar
                                  </button>

                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

      </div>


        </form>

    </div>
  </div>
</div>
