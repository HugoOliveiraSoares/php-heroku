<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

  public function index(Request $request)
  {
    $serires = [
      'Grey\'s Anatomy',
      'Lost',
      'Agents of SHIELD',
      $request->query('serie')
    ];

    $html = "<ul>";
    foreach ($serires as $serie) {

      $html .= "<li>$serie</li>";
    }
    $html .= "<ul>";

    return $html;
  }
}
