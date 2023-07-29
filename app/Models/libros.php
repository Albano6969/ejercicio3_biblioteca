<?php

namespace App\Models;

use App\Models\prestamos;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class libros extends Model
{
    use HasFactory;

    protected $fillable=['titulo', 'autor', 'publicacion', 'genero', 'descripcion'];
    protected $table='libros';
   /* Relacion con la tabla libros */
   public function prestamos(): HasMany{
    return $this->hasMany(prestamos::class, 'libros_id', 'id');
    /* return $this->hasMany(prestamos::class); */
}
/* -------------------------- */

    /* Agregar un nuevo libro en la BBDD */
    public static function createBook(Request $request){
        $books= new libros();
        $books ->titulo =$request->input('titulo');
        $books ->publicacion =$request->input('publicacion');
        $books ->genero =$request->input('genero');
        $books ->disponible =$request->input('disponible');
        $books ->autor =$request->input('autor');
        $books ->descripcion =$request->input('descripcion');
        $books->save();

        return $books->id;
    }
    /* ----------------------------- */

    /* Actualizar un libro */
    public static function updateBook($id, Request $request){
        
        $books = libros::findBooksId($id);
        $books ->titulo=$request->input('titulo');
        $books ->publicacion=$request->input('publicacion');
        $books ->genero=$request->input('genero');
        $books ->disponible=$request->input('disponible');
        $books ->autor =$request->input('autor');
        $books ->descripcion =$request->input('descripcion');
        $books->save();

    }
    /* ------------------------- */

    /* Eliminar un libro */
    public static function deleteBooks($id){
        $books= libros::find($id);
        $books->delete();
    }
    /* ---------------- */

    /* Buscar todos los libros */
    public static function allBooks(){
        return libros::all();
    }
    /* --------------- */

    /* Seleccionar un libro por su ID */
    public static function findBooksId($id){
        return libros::find($id);
    }
    /* ---------------------- */
    

    /* Buscar todos los libros que coincidan con lo que ponemos en el campo de busqueda con paginación */
    public static function searchBooks(Request $request){
        $search= $request->search;
       return $books= libros::where('titulo','LIKE',"%".$search."%")
                ->orWhere('publicacion','LIKE',"%".$search."%")
                ->orWhere('genero','LIKE',"%".$search."%")
                ->orWhere('autor','LIKE',"%".$search."%")
                ->paginate(50);
        
    }
    /* ------------------- */

    /* Busqueda solo por titulo */
    public static function searchBooksTittle(Request $request){
        $search= $request->search;
      
        
       return $books= libros::where('titulo','LIKE',"%".$search."%")
                ->get();
        
    }
    /* ------------------- */

     /* Busqueda solo por Genero */
     public static function searchBooksDescription(Request $request){
        $search= $request->search;
       return $books= libros::where('genero','LIKE',"%".$search."%")
                ->paginate(10);
        
    }
    /* ------------------- */
    /* Busqueda solo por descripcion */
    public static function searchBooksPost(Request $request){
        $search= $request->search;
       return $books= libros::where('publicacion','LIKE',"%".$search."%")
                ->paginate(10);
        
    }
    /* ------------------- */
     /* Busqueda solo por disponibilidad */
     public static function searchBooksStatus(Request $request){
        $search= $request->search;
       return $books= libros::where('disponible','LIKE',"%".$search."%")
                ->paginate(10);
        
    }
    /* ------------------- */
    /* Busqueda solo por Autor */
    public static function searchBooksAutor(Request $request){
        $search= $request->search;
       return $books= libros::where('autor','LIKE',"%".$search."%")
                ->paginate(10);
        
    }
    /* ------------------- */
    
}
