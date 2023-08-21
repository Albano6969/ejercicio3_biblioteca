@extends('app')

@section('title', "Listado de Prestamos")

@section('titlebody', "Listado completo de Prestamos")

@section('content')

    
        {{-- Cuadro de busqueda --}}
    <div class="relative shadow-md mb-3 ">
        <div class=" text-sm text-left text-gray-500 bg-white  p-3 ">
            <div>
                <h3>Busqueda de prestamos</h3>
                
                    
                    
                <div class="flex ">
                    <form action="{{ route('searchLendTittle')}}" method="GET" class="w-screen max-w-screen-2xl "> 
                        <div class="flex mb-4 ">
                            <div class="w-2/3  h-12 flex flex-grow mb-3">
                                <label id="titulo" class="text-xl ">Busqueda por titulo</label>
                                <input type="text" name="search" class="w-10/12 p-4 mr-5 flex-grow text-sm text-gray-900 border m-2 border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">   
                            </div>
                            
                            <div class="w-2/3  h-12 flex flex-row">
                            <button type="submit" class="text-white absolute w-28  bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 border-0">Buscar</button>
                            </div>
                        </div>
                    </form>

                    <form action="{{ route('searchLendDate')}}" method="GET" class="w-screen max-w-screen-2xl ">
                        <div class="flex mb-4 flex-col">
                            <div class="w-4/5  h-12  flex flex-grow mb-3">
                                <label id="titulo" class="text-xl">Busqueda por fechas</label>
                                <div class="w-4/5  h-12 flex flex-grow mb-3">
                                    <input type="date" class="m-1" name="fecha_desde" placeholder="Fecha de desde">
                                    <input type="date" class="m-1" name="fecha_hasta" placeholder="Fecha de hasta">
                                    
                                </div>
                                
                                
                            </div>
                            <div class="w-1/3  h-12 flex flex-row">
                                <button type="submit" class="text-white absolute w-28  bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 border-0">Buscar</button>
                            </div>
                        </div>
                    </form>
                      
                </div>
                <div>
                    {{-- Mensaje si no se encuentra ningún parametro que coincida con la busqueda --}}
                    @isset($comprobacion)
                        
                    
                    @if($comprobacion == "")
                        <x-alert type='red'>
                            <h2 class="p-2 m-4 ">Los parametros de busqueda no coinciden</h2> 
                        </x-alert>    
                        @endif
                        {{-- ---------------------- --}} 

                        {{-- Comprobación de que se a seleccionado un criterio de busqueda --}}
                        
                            @isset($fecha_desde)
                            
                                @if(empty($fecha_hasta))
                                <x-alert type="red">
                                    <h2 class="p-2 m-4 ">Tiene que seleccionar las dos fechas para poder buscar</h2>
                                </x-alert>  
                                @endif
                            @endisset   
                     @endisset    
                    {{-- --------------- --}}
                </div>
                <a href="http://127.0.0.1:8000/mostrarPrestamo" type="button" class="text-white no-underline bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 border-0">Borrar Busqueda</a>
            </div>
        </div>
    </div>
{{-- -------------------------------------------------------- --}}

{{-- Tabla con los resultados --}}
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="table mb-3">
            <thead >
                <th scope="col" class="px-6 py-3 text-lg">Libro</th>
                <th scope="col" class="px-6 py-3 text-lg">Usuario</th>
                <th scope="col" class="px-6 py-3 text-lg">Fecha de salida</th>
                <th scope="col" class="px-6 py-3 text-lg">Fecha de entrega</th>
                <th scope="col" class="px-6 py-3 text-lg">opciones</th>
                
                
            </thead>
            <tbody>
                @each('components.tableLend', $lend, 'item')
            </tbody>
            @isset($search)
            
            @endisset
            
            
        </table>
        
        <tfoot class="gb-white">
            {{$lend->links()}}
        </tfoot>
        </div>
        
    {{-- --------------------------------- --}}
         
    
@endsection