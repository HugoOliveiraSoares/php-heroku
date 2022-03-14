<?php

namespace App\Http\Controllers;


class SeriesController extends Controller
{

  public function listarSeries()
  {
    $serires = [
      'Grey\'s Anatomy',
      'Lost',
      'Agents of SHIELD'
    ];

    $html = "<ul>";
    foreach ($serires as $serie) {

      $html .= "<li>$serie</li>";
    }
    $html .= "<ul>";

    return $html;
  }
}
