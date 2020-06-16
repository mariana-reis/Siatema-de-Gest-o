<?php

namespace SistemaControleBar\Http\Controllers;

use Illuminate\Http\Request;
use SistemaControleBar\Caixa;

class EntradaController extends Controller
{
    public function index()
    {
    	return view('entrada');
    }
    public function store(Request $request)
  	{
   		Caixa::create($request->all());
    	return redirect('/entrada');
  	}

}
