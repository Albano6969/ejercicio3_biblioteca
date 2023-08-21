
@extends('app')

@section('title', "Listado de libros")

@section('titlebody', "Listado completo de libros")

@section('content')

    
        {{-- Cuadro de busqueda --}}
    <div class="relative shadow-md mb-3">
        <div class=" text-sm text-left text-gray-500 bg-white  p-3">
            <div>
                <h3>Busqueda de libros</h3>
                <div class="flex">
                    <form action="{{ route('search')}}" method="GET" class="w-screen"> 
                        <select id="selecSearch" name="selecSearch" class="bg-gray-50 border rounded border-gray-300 text-gray-900 text-sm rounded-r-lg   focus:ring-blue-500 focus:border-blue-500 block m-3 p-2.5">
                            <option selected value="*">selecciona el tipo de busqueda</option>
                            <option value="titulo">Titulo</option>
                            <option value="Autor">Autor</option>
                            <option value="publicacion">Año de publicacion</option>
                            <option value="genero">Generos</option>
                            <option value="disponible">Disponibilidad</option>
                        </select>  
                        <div class="relative ">
                            
                              <input type="search" name="search"  id="default-search" class=" w-10/12 p-4 mr-5 text-sm text-gray-900 border m-2 border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" >
                              <button type="submit" class="text-white absolute w-28 right-2.0 bottom-2.5 bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 border-0">Buscar</button>
                        </div>
                      </form>
                      
                </div>
                <div>
                    {{-- Mensaje si no se encuentra ningún parametro que coincida con la busqueda --}}
                    @if($books->isEmpty())
                        <x-alert type='red'>
                            <h2 class="p-2 m-4 ">Los parametros de busqueda no coinciden</h2> 
                        </x-alert>    
                        @endif
                        {{-- ---------------------- --}} 

                        {{-- Comprobación de que se a seleccionado un criterio de busqueda --}}
                        
                            @isset($searchSelected)
                            
                                @if($searchSelected == '*')
                                <x-alert type="red">
                                    <h2 class="p-2 m-4 ">Tiene que seleccionar el tipo de busqueda para optimizar la busqueda</h2>
                                </x-alert>  
                                @endif
                            @endisset    
                        
                    {{-- --------------- --}}
                </div>
            </div>
        </div>
    </div>
{{-- -------------------------------------------------------- --}}

{{-- Tabla con los resultados --}}
      <div class=" shadow-md sm:rounded-lg mb-4 ">
        <table class="table mb-3">
            <thead >
                <th scope="col" >Titulo</th>
                <th scope="col" >Autor</th>
                <th scope="col" >Año de Publicación</th>
                <th scope="col" >Genero</th>
                <th scope="col" >Disponible</th>
                <th scope="col" >Opciones</th>
                
            </thead>
            <tbody>
                @each('components.tableLibros', $books, 'item')
            </tbody>
            @isset($search)
            <tfoot>
                <tr>
                    <td colspan="1" >{{$books->appends('search', $search)}}</td>
                </tr>
            </tfoot>
            @endisset
            
            
        </table>
        <tfoot class="bg-white">
            {{$books->links()}}
        </tfoot>
        </div>
    {{-- --------------------------------- --}}
         
    
@endsection