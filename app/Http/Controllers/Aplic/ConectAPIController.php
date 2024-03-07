<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConectAPIController extends Controller
{
  public function changed_chords(Request $request)
  {

    $textoAntigoArray= $request->all('texto');
    $textoAntigoString = $textoAntigoArray['texto'];
    
    
    $fator = $request['fator'];
    $texto = $request['texto'];


    $response =  Http::post(
      'https://288c64e8-3af4-4158-9f50-cd00e3b677fb-00-2265w61h05qm0.picard.replit.dev/api/',
      ['fator' => $fator, 'texto' => $texto]
    );
    
    return view('pages/resultado', [
                'lines' => $response['lines'],
                'cifers' => $response['cifers'], 
                'textoAntigoString' => $textoAntigoString,
                'fatorAntigo' => $fator
                ]);
  }

  public function outroTom(Request $request)
  {
    $fatorNovoInteger = intval($request['fator']);
    $fatorAntigoInteger = intval($request['fatorAntigo']);
    $fator = ($fatorAntigoInteger + $fatorNovoInteger);
    $request['fator'] = strval($fator);
    return $this->changed_chords($request);
  }
}
