<?php

namespace App\Http\Controllers;

use App\Models\pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function upload(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);

        $pdfName = $request->file('pdf')->getClientOriginalName();
        $path = $request->file('pdf')->storeAs('public', $pdfName);

        return redirect('/doctor-home')->with('success', 'PDF file uploaded successfully.');
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'subject' => 'required|string|max:255',
    //         'pdf' => 'required|string',
    //     ]);
    //     // error
    //     $file= $request->file('pdf');
    //     $pdfName = $file->getClientOriginalName();
    //     $updatedPdfName = time() . '_' . $pdfName;
    //     $file->move('pdf' , $updatedPdfName);
    //     $pdf = new pdf;
    //     $pdf->pdf = $updatedPdfName;
    //     $pdf->subject =$validatedData['subject'];
    //     $pdf->save();
    // }

}
