<nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6 ">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <span class="font-semibold text-2xl tracking-tight"><a href='/' class="font-semibold text-2xl tracking-tight text-gray-300 no-underline">Biblioteca</a> </span>
  </div>
  
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="/mostrarLibros" class="block mt-4 mr-4 text-lg lg:inline-block lg:mt-0 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md no-underline">
        Mostrar Libros
      </a>
      <a href="/showFormBook" class="block mt-4 mr-4 text-lg lg:inline-block lg:mt-0 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md no-underline">
        Crear Libro nuevo
      </a>
      <a href="/mostrarPrestamo" class="block mt-4 mr-4 text-lg lg:inline-block lg:mt-0 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md no-underline">
        Prestamos
      </a>
    </div>
    <div>
      <form action="{{ route('search')}}" method="GET">   
        <div class="relative ">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
              <input type="search" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" >
              <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 border-0">Buscar</button>
        </div>
      </form>
    
    </div>
  </div>
</nav>
