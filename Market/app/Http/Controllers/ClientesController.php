<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller
{
    public function get(Request $request, $id){
      return Clientes::findOrFail($id);
    }
    
    public function list(Request $request){
      return Clientes::get();
    }
    
    public function create(Request $request){
        
      $validatedData = $request->validate([
        'nombre' => 'required |max:191 ',
        'telefono' => 'required |max:191 ',
        'direccion' => 'required |max:191 ',
        'id_usuario' => 'required |max:20 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 191 characters.',
        'telefono.required' => 'telefono is a required field.',
        'telefono.max' => 'telefono can only be 191 characters.',
        'direccion.required' => 'direccion is a required field.',
        'direccion.max' => 'direccion can only be 191 characters.',
        'id_usuario.required' => 'id_usuario is a required field.',
        'id_usuario.max' => 'id_usuario can only be 20 characters.',
      ]);

        $clientes = Clientes::create($request->all());    
        return $clientes;
    }
    
    public function update(Request $request, $id){
      
      $validatedData = $request->validate([
        'nombre' => 'required |max:191 ',
        'telefono' => 'required |max:191 ',
        'direccion' => 'required |max:191 ',
        'id_usuario' => 'required |max:20 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 191 characters.',
        'telefono.required' => 'telefono is a required field.',
        'telefono.max' => 'telefono can only be 191 characters.',
        'direccion.required' => 'direccion is a required field.',
        'direccion.max' => 'direccion can only be 191 characters.',
        'id_usuario.required' => 'id_usuario is a required field.',
        'id_usuario.max' => 'id_usuario can only be 20 characters.',
      ]);

        $clientes = Clientes::findOrFail($id);
        $input = $request->all();
        $clientes->fill($input)->save();
        return $clientes;
    }
    
    public function delete(Request $request, $id){
        $clientes = Clientes::findOrFail($id);
        $clientes->delete();
    }
}
 ?>