<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Barryvdh\DomPDF\Facade\Pdf;

class productosController extends Controller
{
    public function pdf()
    {
    $pdf = Pdf::loadView('pdf_example');
    return $pdf->stream('archivo.pdf');
    }

    public function index()
    {
        return view('productos');
    }

    public function mostrar()
    {
        echo "metodo mostrar";
    }
    
     public function crear()
    {
        return view('crear');
    }
    
    public function show($post)
    {
        return "Aca se mando un valro como parametro el valor es: " . $post;
    }

    public function dataformulario(Request $request)
    {
        return $request->input('nombre');
    }

}