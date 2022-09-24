<?php

namespace App\Http\Controllers;

use App\Models\StorePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
class BriefingController extends Controller
{
    public function postBriefing(Request $request){
       
        $data = $request->data;


        $numPDF = Str::random(9);
        $pdf = PDF::loadView('pdf.briefing', compact('data'))->setPaper('a4');
        $pdf->save(public_path('pdf/briefing' . $numPDF . '.pdf'));
        StorePDF::create(['pdf' => 'briefing' . $numPDF . '.pdf']);
        $value =  StorePdf::where('pdf', 'briefing' . $numPDF . '.pdf')->first();  

        return response()->json(['url' => url('pdf/'.$value['pdf'])], 200); 
    }
}
