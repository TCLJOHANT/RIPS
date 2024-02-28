<x-app-layout>
    <div>
        <div>
            <div class="bg-white p-2 m-2">
                <div class="px-6 py-4 flex items-center justify-center flex-wrap">
                    <div class="flex items-center ">
                        <span>mostrar</span>
                        <select   class="mx-2  border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm ">
                            <option value="10">5</option>
                            <option value="10">10</option>
                        </select>
                        <span>entradas</span>
                    </div>
                    <input type="text" class=" flex-1 m-2"  placeholder="Buscar"/>
  
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if ($usuarios->isEmpty())
                            {{-- <div class="px-6 py-4">
                                @if ($this->search)
                                    No Existe el Rol
                                @else
                                    No hay usuariod creados actualmente <b> pero puedes crear uno ahora.</b>
                                @endif
                            </div> --}}
                        @else
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50 text-center">
                                    <tr class="cursor-pointer  text-left text-xs font-medium text-gray-500 uppercase">
                                    </tr>
                                    
                                </thead>
                                <tbody >
                                    @foreach ($usuarios as  $usuario)
                                    <tr >
                                      <td>{{$usuario}}</td>    
                                        <td class="px-6 py-6 flex items-center">
                                        
                                            <button class="ml-2 font-bold text-white p-2 rounded cursor-pointer  bg-blue-500"  >  
                                                <i class="fas fa-pencil-alt"></i>
                                            </button> 
                                            <button  class="ml-2 font-bold text-white p-2 rounded cursor-pointer bg-red-600">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- si tiene al menos dos paginas se mostrata si no se oculta --}}
                            @if ($usuarios->hasPages())
                                <div class="px-6 py-3">
                                    {{$usuarios->links()}}
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
        </div>       
    </div>
 </x-app-layout>