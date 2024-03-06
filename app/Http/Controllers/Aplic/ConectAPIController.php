<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConectAPIController extends Controller
{
  public function __invoke(Request $request){

    $fator = $request['fator'];
    $texto = $request['texto'];

    $response =  Http::post(
      'https://288c64e8-3af4-4158-9f50-cd00e3b677fb-00-2265w61h05qm0.picard.replit.dev/api/',
      ['fator' => $fator, 'texto' => $texto]
    );
    //Por padrão, no header =>  content type : application/json

    return view('pages/cole_aqui', ['response' => $response]);
  }
}
