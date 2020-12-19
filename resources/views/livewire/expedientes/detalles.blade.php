
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" id="modal-1" >
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                @foreach($detallesExpedientes as $item)

                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Detalles de recepcion de la solicitud</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Estos son los detalles de la recepcion <hr>
                                    <br>

                                        <span class="font-bold text-xs">EXPEDIENTE:</span><br>
                                        {{$item->numero_expediente}} <br>

                                        <span class="font-bold text-xs">OFICIO:</span><br>
                                        {{$item->numero_documento}} <br>
                                           <span class="font-bold text-xs">REMITENTE:</span><br>
                                        {{$item->remitente}} <br>


                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="#" method="POST">
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-1 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <!--
                                                    <input type="hidden" class="shadow px-3 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="id" placeholder="" wire:model.defer="idexpediente" readonly>
                                                -->


                                                    <div class="col-span-3">
                                                        <label for="">Prioridad</label>
                                                        <br>

                                                        <?php if($item->prioridad==1){ ?>
                                                        <span class="px-1 inline-flex text-xs leading-5 font-bold text-red-800">
                                                            MUY URGENTE
                                                        </span>
                                                        <?php }else{ ?>
                                                        <span class="px-1 inline-flex text-xs leading-5 font-bold text-yellow-500">
                                                             NORMAL
                                                        </span>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="col-span-3">
                                                        <label for="">Presicion</label>
                                                        <br>
                                                        {{ round(($item->presicion)*100,0) }}%
                                                    </div>

                                                    <div class="col-span-6">
                                                        <label for="">Unidad Organica</label>
                                                        <br>
                                                        {{ $item->uo_destino }}
                                                    </div>

                                                    <div class="col-span-6">
                                                        <label for="">Observaciones</label>
                                                        <br>
                                                        {{ $item->observacion }}
                                                    </div>

                                                    <div class="col-span-6">
                                                        <label for="">Respuesta</label>
                                                        <br>
                                                        {{ $item->respuesta }}
                                                        <br>
                                                        <small>Este texto son instrucciones para la unidad organica responsable es decir se indica como se debe finalizar el proceso</small>

                                                    </div>





                                            </div>

                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <!--
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Save
                                            </button>
                                            -->
                                            <button wire:click.prevent="store()" type="button" class="inline-flex justify-center rounded-md border border-transparent px-3 py-1 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                                Grabar
                                            </button>
                                            <button wire:click="closeModal()" type="button" class="inline-flex justify-center rounded-md border border-gray-300 px-3 py-1 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                                Cancelar
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                @endforeach

            </form>

        </div>
    </div>
</div>

