<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function downloadPDF()
    {
        $data = [
            'name' => 'akmal',
            'title' => 'CERTIFICATE',
            'description' => 'congratulation!'
        ];

        $pdf = Pdf::loadView('certif1', $data);
        // $pdf->setPaper([0, 0, 2000, 1414]);
        // $pdf->setPaper([0, 0, 106, 150]);

        return $pdf->stream('certif.pdf');
    }
    public function downloadPDF2()
    {
        $data = [
            'name' => 'akmal',
            'title' => 'CERTIFICATE',
            'description' => 'congratulation!'
        ];

        $pdf = Pdf::loadView('certif2', $data);
        // $pdf->setPaper([0, 0, 1414, 2000]);
        return $pdf->stream('certif2.pdf');
    }
}
