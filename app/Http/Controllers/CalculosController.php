<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function calcularFactorial(Request $request)
    {
        $request->validate([
            'n' => 'required|numeric|min:1|max:20',
        ]);
        $n = intval($request->n);
        $prod = 1;
        for ($i = 1; $i <= $n; $i++)
            $prod *= $i;
        return view('vistaFactorial', compact('n', 'prod'));
    }

    function calcularPalindromo(Request $request)
    {
        $request->validate([
            'cad' => 'required',
        ]);
        $cad = $request->cad;
        $lower = strtolower(str_replace(" ", "", $cad));
        $inv = strrev($lower);
        $resul = $lower == $inv ? "ES" : "NO es";
        return view('vistaPalindromo', compact('cad', 'resul'));
    }

    function calcularFibonacci(Request $request)
    {
        $request->validate([
            'n' => 'required|numeric|min:1|max:100',
        ]);
        $n = intval($request->n);
        $serie = "0";
        $n0=0;
        $n1=1;
        for ($i = 2; $i <= $n; $i++)
            if($n==2) 
                $serie="0, 1"; 
            else {
                $aux=$n0+$n1;
                $serie .= ", $n1";
                $n0=$n1;
                $n1=$aux;
            }
        return view('vistaFibonacci', compact('n', 'serie'));
    }
    function calcularPalabras(Request $request)
    {
        $request->validate([
            'cad' => 'required',
        ]);
        $cad = $request->cad;
        $cant = str_word_count($cad);
        return view('vistaPalabras', compact('cant', 'cad'));
    }
    function calcularVocales(Request $request)
    {
        $request->validate([
            'cad' => 'required',
        ]);
        $cad = $request->cad;
        $vocales = array('a', 'e', 'i', 'o', 'u');
        $cant = 0;
        foreach ($vocales as $vocal) {
            $cant += substr_count(strtolower($cad), $vocal);
}
        return view('vistaVocales', compact('cant', 'cad'));
    }
    function calcularNumPerfecto(Request $request)
    {
        $request->validate([
            'n' => 'required|numeric|min:1|max:100000',
        ]);
        $n = intval($request->n);
        $sumaDivisores = 0;
        $res="";
        for ($i = 1; $i < $n; $i++) {
            if ($n % $i == 0) {
                $sumaDivisores += $i;
            }
        }
        if ($sumaDivisores == $n) {
            $res="ES";
        } else {
            $res="NO ES";
        }
        return view('vistaNumPerfecto', compact('n', 'res'));
    }
}
