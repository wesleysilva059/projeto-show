<?php

namespace App\Http\Controllers;

use App\Models\Artistas\Artista;
use App\Models\Usuarios\Usuario;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Traits\Sistema\Handler;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Handler;
}
