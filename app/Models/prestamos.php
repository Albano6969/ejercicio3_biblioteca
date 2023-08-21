<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\prestamos;
use App\Models\libros;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class prestamos extends Model
{
    use HasFactory;


    protected $fillable=['libro_id', 'user_id', 'fecha_prestamo', 'fecha_devolucion'];
    protected $table='prestamos';
    /* Relacion con la tabla libros */
    public function libro(){
        return $this->belongsTo(libros::class, 'libro_id', 'id');
        
       
    }
    /* -------------------------- */

    /* Buscar todos los prestamos */
    public static function allLend(){
        return prestamos::paginate(10);
    }
    /* --------------- */

    /* Buscar los prestamos que esten disponibles */
    public static function findLedId($id){
        return prestamos::find($id);
    }
    /* ---------------------- */

     /* Seleccionar un libro por su ID */
     public static function findLedIdResult($id){
        return prestamos::where('libro_id', '=', $id)
            ->get();
    }
    /* ---------------------- */


    /* agregar prestamo y actualizar disponibilidad */
    public static function addUpdateLend($id, Request $request){
        
        $books = libros::findBooksId($id);
        $books ->disponible='NO';
        $books->save();
        $lend= new prestamos();
        $lend->fecha_prestamo=$request->input('fecha');
        $lend->libro_id=$id;
        $lend->save(); 

    }
    /* ------------------------- */

    /* buscar el ultimo prestamo para entregarlo */
    public static function findDeleteLend($id){
        return $lend = prestamos::where('libro_id', $id)
            ->orderby('fecha_prestamo', 'DESC')
            ->first();

    }
    
    /* ------------ */

    /* eliminar prestamo y actualizar disponibilidad */
    public static function updateDeleteLend($id, Request $request){
        $book = $request->input('libro_id');
        $lend= prestamos::findDeleteLend($book);
        $lend->fecha_devolucion=$request->input('fecha_devolucion');
        $lend->save();
        $books = libros::findBooksId($book);
        $books ->disponible='SI';
        $books->save();
        
    }
    /* ------------------------- */

    /* Busqueda de prestamos por titulo del libro */  
    public static function searchLendTittle($search){
        
       return $lend= prestamos::where('libro_id','=',$search)
                ->get();
                
    }
    /* ------------------- */

    /* Busqueda de prestamos entre dos fechas */
    public static function searchLendBetweenDate($fecha_desde, $fecha_hasta){
       return $lend= prestamos::where('fecha_prestamo','>=',$fecha_desde)
                ->where('fecha_prestamo', '<=',$fecha_hasta)
                ->get();
    }
    /* ------------------- */
     /* Busqueda de prestamos solo con una fecha */
     public static function searchLendOneDate($fecha_desde){
        return $lend= prestamos::where('fecha_prestamo','>=',$fecha_desde)
                 ->get();
     }
     /* ------------------- */
    
}
