<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModeloMoto;

class ModeloMotoController extends Controller
{
    public function index(){
        $modelosMotos = ModeloMoto::orderBy('id', 'DESC')->paginate(5);

        return view('modelo-motos.index', compact('modelosMotos'));
    }

    public  function  show($id){
        $modeloMoto = ModeloMoto::find($id);

        return view('modelo-motos.show', compact('modeloMoto'));
    }
}
