<?php

namespace SistemaControleBar\Http\Controllers;

use Illuminate\Http\Request;
use SistemaControleBar\Produto;
use SistemaControleBar\Caixa;
use SistemaControleBar\Cliente;

use PDF;


class PdfController extends Controller
{
    public function geraPdf(){

        $produto = Produto::all();

        $pdf = PDF::loadView('pdf_produto', compact('produto'));

        return $pdf->setPaper('a4')->stream('Todos_Produtos.pdf_produto');


    }

    public function caixa(){

        $caixas = Caixa::all();

        $pdf = PDF::loadView('pdf_caixa', compact('caixas'));

        return $pdf->setPaper('a4')->stream('controle_caixa.pdf_caixa');


    }

    public function cliente(){

        $clientes = Cliente::all();

        $pdf = PDF::loadView('pdf_cliente', compact('clientes'));

        return $pdf->setPaper('a4')->stream('controle_cliente.pdf_cliente');


    }
}
