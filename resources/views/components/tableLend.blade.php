
    
    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">

        <td class="px-6 py-4 text-base">{{$item->libro->titulo}}</td>
        <td class="px-6 py-4 text-base">{{-- {{$item->libro->descripcion}} --}}</td>
        <td class="px-6 py-4 text-base">{{$item->fecha_prestamo}}</td>
        <td class="px-6 py-4 text-base">{{$item->fecha_devolucion}}</td>
        <td class="px-6 py-4 text-base">
            
            <a href="http://127.0.0.1:8000/viewDetailsLend/{{$item->id}}" type="button" class="outline-none no-underline text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900" >Detalles</a>
            @if(empty($item->fecha_devolucion))
            <a href="http://127.0.0.1:8000/deleteLendForm/{{$item->id}}" type="button" class="outline-none no-underline text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900" >Entregar Prestamo</a>
            @endif
            
         <input type="hidden" value="{{$item->libro_id}}">   
        
    </tr>
    
