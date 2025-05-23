<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator.index');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('first');
        $num2 = $request->input('second');
        $operation = $request->input('operasi');
        
        $result = null;

        switch ($operation) {
            case 'plus':
                $result = $num1 + $num2;
                break;
            case 'minus':
                $result = $num1 - $num2;
                break;
            case 'multi':
                $result = $num1 * $num2;
                break;
            case 'divin':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    return back()->withErrors(['error' => 'Tidak Bisa membagi dengan angka 0']);
                }
                break;
            default:
                return back()->withErrors(['error' => 'Operasi Gagal']);
        }

        return view('calculator.index', compact('result'));
    }
}
