<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColeAquiController extends Controller
{
  public function __invoke()
  {
    return view('pages/cole_aqui');
  }
}
