<?php

namespace SistemaControleBar\Http\Controllers;

use Illuminate\Http\Request;
use SistemaControleBar\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use SistemaControleBar\Http\Requests\ImprimirRequest;


class ImprimirController extends Controller
{
    public function __construct()
    {


    }
    public function index(Request $request)
    {


        return view('imprimir.extrato');


    }
}
