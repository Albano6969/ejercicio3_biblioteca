
    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
        <td class="px-4 py-3 text-base">{{$item->titulo}}</td>
        <td class="px-4 py-3 text-base">{{$item->autor}}</td>
        <td class="px-4 py-3 text-base">{{$item->publicacion}}</td>
        <td class="px-4 py-3 text-base">{{$item->genero}}</td>
        <td class="px-4 py-3 text-base">{{$item->disponible}}</td>
        <td class="px-4 py-3 text-base  flex flex-col xl:flex-row ">
            
            <a href="http://127.0.0.1:8000/viewDetails/{{$item->id}}" type="button" class=" outline-none no-underline text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900" >Detalles</a>
            <a href="http://127.0.0.1:8000/updateBooksForm/{{$item->id}}" type="button" class=" outline-none no-underline text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900" >Editar</a>
            
            <a href="http://127.0.0.1:8000/deleteBook/{{$item->id}}" type="button" class=" outline-none no-underline text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</a>
            @if($item->disponible == "SI")
            <a href="http://127.0.0.1:8000/newLend/{{$item->id}}" type="button" class=" outline-none no-underline text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900" >Prestamo</a>
            @else
            <a href="http://127.0.0.1:8000/deleteLend/{{$item->id}}" type="button" class=" outline-none no-underline text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900" >Entregar</a>
            @endif
        </td>   
    </tr>
    
