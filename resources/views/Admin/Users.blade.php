<x-app-layout>
   <div>
      <div class="card">
         <div class="px-6 py-4 flex items-center">
             <div class="flex items-center">
                 <span>mostrar</span>
                 <select class="mx-2  border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm ">
                     <option value="10">5</option>
                     <option value="10">10</option>
                 </select>
                 <span>entradas</span>
             </div>
             <input type="text" class="flex-1 mx-4" placeholder="Buscar"/>
             <button >Crear Usuario</button>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 @if ($users->count())
                     <table class="min-w-full divide-y divide-gray-200">
                         <thead class="bg-gray-50">
                             <tr>
                             
                                 <th scope="col"  class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                                 <th scope="col"  class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Gmail</th>
                                 <th scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Rol</th>
                                 <th colspan="2"  class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                             </tr>
                         </thead>
                         <tbody >
                             @foreach ($users as $user)
                                 <tr >
                                     
                                     <td class="px-6 py-6">{{$user->name}}</td>
                                     <td class="px-6 py-6">{{$user->email}}</td>
                                     <td class="px-6 py-6">
                                         @foreach ($user["roles"] as $rol) 
                                            {{$rol->name}}
                                         @endforeach
                                     </td>
                                     
                                     <td class="px-6 py-6 flex items-center">
                                             
                                             <button class="ml-2 font-bold text-white p-2 rounded cursor-pointer  bg-blue-500"  >  
                                                 <i class="fas fa-pencil-alt"></i>
                                             </button> 
                                             <button class="ml-2 font-bold text-white p-2 rounded cursor-pointer bg-red-500">
                                                 <i class="fas fa-trash"></i>
                                             </button>
                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                      {{-- si tiene al menos dos paginas se mostrata si no se oculta --}}
                      @if ($users->hasPages())
                      <div class="px-6 py-3">
                          {{$users->links()}}
                      </div>
                  @endif
                 @else
                 <div class="px-6 py-4">
                     No Existe el  Usuario
                 </div>
                 @endif
             </div>
         </div>
      </div>
     </div>
</x-app-layout>