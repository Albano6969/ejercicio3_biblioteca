@extends('app')
@section('title', 'Detalle del libro')
@section('titlebody', 'Detalles del libro')
@section('content')
    

    <div class="bg-gray-100 mx-auto max-w-xl bg-white py-20 px-12 lg:px-24 shadow-xl mb-24 rounded-lg w-full max-w-sm">
        
            
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Titulo:</label>
                    </div>  
                    <div class="md:w-2/3">  
                        <h3 class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 uppercase " >{{$books->titulo}}</h3>
                    </div>
                </div>  
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Autor:</label>
                    </div>  
                    <div class="md:w-2/3">  
                        <h3 class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 uppercase" >{{$books->autor}}</h3>
                    </div>
                </div> 
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Descripción:</label>
                    </div>  
                    <div class="md:w-2/3">  
                        <h3 class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">{{$books->descripcion}}</h3>
                    </div>
                </div> 
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Año de Publicación:</label>
                    </div>
                    <div class="md:w-2/3">    
                        <h3 class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">{{$books->publicacion}}</h3>
                    </div>
                </div>    
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Genero:</label>
                    </div>
                    <div class="md:w-2/3">    
                        <h3 class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">{{$books->genero}}</h3>
                    </div>
                </div>  
                <div class="md:w-6 mx-auto">
                    <a href="http://127.0.0.1:8000/mostrarLibros" type="button" class="shadow no-underline bg-blue-500 hover:bg-blue-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded border-none ">Atras</a>
                </div>     
    </div>
    
@endsection