<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    public function index() 
    { 
        $transaccion = [ 
            ['id' => 1, 'monto' => '$100.00', 'estado' => 'aprobado'], 
            ['id' => 2, 'monto' => '$200.00', 'estado' => 'pendiente'], 
            ['id' => 3, 'monto' => '$300.00', 'estado' => 'rechazado'], 
        ]; 
  
        return $transaccion; 
    }
}
