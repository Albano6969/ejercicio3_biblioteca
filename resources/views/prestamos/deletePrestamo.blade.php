@extends('app')
@section('title', 'Devolver Prestamo')
@section('titlebody', 'Devolver Prestamo')
@section('content')
    

    <div class="bg-gray-100 mx-auto max-w-xl bg-white py-20 px-12 lg:px-24 shadow-xl mb-24 rounded-lg">
        <form action="{{route('DeleteUpdateLends')}}" method="POST" class="w-full max-w-sm ">
            @csrf
            
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Titulo:</label>
                        <input type="hidden" name="libro_id" value="{{$lend->libro_id}}" >
                            
                    </div>  
                    <div class="md:w-2/3">  
                        <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="titulo" value="{{$lend->libro->titulo}}">
                    </div>
                </div>  
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Fecha de prestamo:</label>
                    </div>  
                    <div class="md:w-2/3">  
                        <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="fecha_prestamo" value="{{$lend->fecha_prestamo}}" readonly>
                    </div>
                </div> 
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Fecha de la entrega:</label>
                    </div>  
                    <div class="md:w-2/3">  
                        <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="fecha_devolucion" value="{{$fecha}}" readonly>
                    </div>
                </div> 
                
                <div class="md:flex md:items-center ">
                        
                    <div class="md:w-6 mx-auto"> 
                        <input type="submit" class="shadow bg-blue-600 hover:bg-blue-800 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded border-none " value="Entregar Libro">   
                        
                    </div>
                    <div class="md:w-6 mx-auto">
                    <a href="http://127.0.0.1:8000/mostrarPrestamo" type="button" class="shadow bg-red-800 hover:bg-red-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded border-none ">Cancelar</a>
                    </div>        
                </div>
        </form>
    </div>
    
@endsection