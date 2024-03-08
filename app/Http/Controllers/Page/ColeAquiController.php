<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColeAquiController extends Controller
{
  public function exibirPageHome(Request $request)
  {
    $agentUser = $request['agentUser'];
    $page = 'pages/' . $agentUser . '/cole_aqui';
    return view($page);
  }

  
}
