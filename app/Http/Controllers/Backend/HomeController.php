<?php

namespace App\Http\Controllers\Backend;

use DateTime;
use Illuminate\Http\Request;
use App\Models\Backend\Cotas\Cota;
use App\Models\Backend\Pedidos\Pedido;
use App\Models\Backend\Simulacao\Simulacao;
use App\Http\Controllers\Backend\BackController;


class HomeController extends BackController {

    function index(Request $request) {
      return view('backend.index');
    }

}