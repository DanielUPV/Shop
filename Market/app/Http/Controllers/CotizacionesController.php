<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizaciones;

class CotizacionesController extends Controller
{
    public function get(Request $request, $id){
      return Cotizaciones::findOrFail($id);
    }
    
    public function list(Request $request){
      return Cotizaciones::get();
    }
    
    public function create(Request $request){
        
      $validatedData = $request->validate([
        'id_sitio' => 'required |max:20 ',
      ],[
        'id_sitio.required' => 'id_sitio is a required field.',
        'id_sitio.max' => 'id_sitio can only be 20 characters.',
      ]);

        $cotizaciones = Cotizaciones::create($request->all());    
        return $cotizaciones;
    }
    
    public function update(Request $request, $id){
      
      $validatedData = $request->validate([
        'id_sitio' => 'required |max:20 ',
      ],[
        'id_sitio.required' => 'id_sitio is a required field.',
        'id_sitio.max' => 'id_sitio can only be 20 characters.',
      ]);

        $cotizaciones = Cotizaciones::findOrFail($id);
        $input = $request->all();
        $cotizaciones->fill($input)->save();
        return $cotizaciones;
    }
    
    public function delete(Request $request, $id){
        $cotizaciones = Cotizaciones::findOrFail($id);
        $cotizaciones->delete();
    }
}
 ?>