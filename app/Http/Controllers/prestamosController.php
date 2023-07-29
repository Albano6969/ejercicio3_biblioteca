<?php

namespace App\Http\Controllers;

date_default_timezone_set('Europe/Madrid');

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\prestamos;
use App\Models\libros;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class prestamosController extends Controller
{
    /* Mostramos todos los prestamos en una tabla */
    public function showAllLend(){
        $lend = prestamos::allLend();
        /* dd($lend); */
        return view('prestamos.showPrestamo', compact('lend'));
    }
    /* --------------------------- */

/* Ver formulario de prestamo con el libro seleccionado */
    public function newLend($id){
        $books = libros::findBooksId($id);
        $fecha=date("y-m-d H:i:s");
        Session::put('id', $id);
        return view('prestamos.newPrestamo', compact('books', 'fecha'));
        
    }
/* ------------------------------------------- */
    
/* Agregar el libro a prestamos */
public function addLend(Request $request){
    $id = Session::get('id');
    prestamos::addUpdateLend($id, $request);

    return Redirect::to('/mostrarLibros');

}
/* ----------------------------- */

/* Ver formulario de prestamo con el libro seleccionado */
public function deleteLend($id){
    $books = libros::findBooksId($id);
    $lend = prestamos::findDeleteLend($id);
    $fecha=date("y-m-d H:i:s");
    Session::put('id', $id);
    
    
    return view('prestamos.deletePrestamo', compact('books', 'fecha', 'lend'));
    
}
/* ------------------------------------------- */
/* Ver formulario de prestamo desde prestamos */
public function deleteLendForm($id){
    $lend = prestamos::findLedId($id);
    $fecha=date("y-m-d H:i:s");
    Session::put('id', $id);
    return view('prestamos.deletePrestamo', compact( 'fecha', 'lend'));
    
}
/* ------------------------------------------- */

/* Entregar el libro y actualizar disponibilidad */
public function DeleteUpdateLends(Request $request){
    $id = Session::get('id');
    /* $libro_id=Session::get('libro_id'); */
    prestamos::updateDeleteLend($id, $request);

    return Redirect::to('/mostrarPrestamo');

}
/* ----------------------------- */

 /* Mostramos el formulario relleno con el prestamo que queremos ver los detalles */
 public function viewDetailsLend($id){
    $lend = prestamos::findLedId($id);
    Session::put('id', $id);
    return view('prestamos.viewLend', compact('lend'));

}
/* --------------------- */


/* Funcion para buscar por titulo*/
public function searchLendTittle(Request $request){
    $search= strtolower($request->input('search'));
    $lend = [];
    $prestamosLists = prestamos::allLend();
    $comprobacion="";
    if(isset($prestamosLists)){

        foreach($prestamosLists as $prestamosList){
            $titulo= strtolower($prestamosList->libro->titulo);
            
                if(str_contains($titulo, $search) ){
                
                $lend[]=$prestamosList;
                $lend= collect($lend);
                $comprobacion="1";
            
                }

        }
          
        return view('prestamos.showPrestamo', compact('lend',  'comprobacion'));
    } 
}
/* ----------------------------- */

/* Funcion para buscar entre las fechas seleccionadas*/
public function searchLendDate(Request $request ){
    $fecha_desde=$request->fecha_desde;
    $fecha_hasta=$request->fecha_hasta;
    if(empty($fecha_desde)){
        $lend= prestamos::allLend();
        $comprobacion="";
    }elseif(empty($fecha_hasta)){
        $lend=prestamos::searchLendOneDate($fecha_desde);
        $comprobacion="1";
    }else{
        $lend=prestamos::searchLendBetweenDate($fecha_desde, $fecha_hasta);
        $comprobacion="1";
    }

   
    
    return view('prestamos.showPrestamo', compact('lend', 'comprobacion'));
}
/* ----------------------------- */
   
}
