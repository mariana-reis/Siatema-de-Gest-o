<?php

namespace SistemaControleBar\Http\Controllers;

use Illuminate\Http\Request;
use SistemaControleBar\Caixa;

class SaidaController extends Controller
{
    public function index()
    {
    	return view('saida');
    }

    public function store(Request $request)
  	{
   		Caixa::create($request->all());
    	return redirect('/saida');
  	}
}
