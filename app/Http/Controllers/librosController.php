<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\libros;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;




class librosController extends Controller
{
    /* Agregamos un nuevo libro desde el formulario agregar */
    public function addBooks(Request $request){
        $id_libro= libros::createBook($request);
        return view ('libros\addLibroOk', ['id' => $id_libro]);
        
        

    }
    /* ---------------------- */

    /* Mostramos el formulario para agregar un nuevo libro */
    public function showFormBook(){
        return view('libros\addlibro');
    }
    /* -------------------------- */

    /* Eliminamos un libro con su id */
    public function destroyBooks($id){
        libros::deleteBooks($id);
        return Redirect::to('/mostrarLibros');

    }
    /* ------------------------------ */

    /* Mostramos todos los libros en una tabla */
    public function showAllBook(){
        $books = libros::allBooks();
        return view('libros.showlibro')->with('books', $books);
    }
    /* --------------------------- */

    
    /* Mostramos el formulario relleno con el libro que queremos modificar */
    public function updateBooksForm($id){
        $books = libros::findBooksId($id);
        Session::put('id', $id);
        return view('libros.updatelibroForm', compact('books'));

    }
    /* --------------------- */

     /* Mostramos el formulario relleno con el libro que queremos ver los detalles */
     public function viewDetails($id){
        $books = libros::findBooksId($id);
        Session::put('id', $id);
        return view('libros.viewBook', compact('books'));

    }
    /* --------------------- */

    

    /* Actualizamos el libro con los datos nuevos que le hemos puesto al formulario */
    public function updateBooks(Request $request){
        $id = Session::get('id');
        libros::updateBook($id, $request);

        return Redirect::to('/mostrarLibros');

    }
    /* ----------------------------- */

    /* Funcion para buscar tanto en titulo, descripcion y genero*/
    public function search(Request $request){
        
        $search= $request->search;
        $searchSelected=$request->selecSearch;

        if($search != "" && $searchSelected== "*" ){
            $books= libros::allBooks();
        }

        switch ($searchSelected) {
            case 'titulo':
                $books= libros::searchBooksTittle($request);
                break;
            case 'genero':
                $books= libros::searchBooksDescription($request);
                break;
            case 'publicacion':
                $books= libros::searchBooksPost($request);
                break;
            case 'disponible':
                $books= libros::searchBooksStatus($request);
                break;
            case 'autor':
                $books= libros::searchBooksAutor($request);
                break;
            case '*':
                $books= libros::searchBooks($request);
                break;
            default:
            
                $books= libros::searchBooks($request);
             
                break;
        }
    
        return view('libros.showlibro', compact('books', 'search', 'searchSelected'));
    }
    /* ----------------------------- */

   
    
}
