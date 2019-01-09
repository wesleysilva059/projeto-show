<?php

namespace App\Traits\Backend;

use Auth;
use View;
use Atividade;
use App\Models\Backend\User;
use Illuminate\Http\Request;

trait Handler {

  protected $user;
  
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct() {
    $this->middleware(function($request, $next) {
      $this->user = auth()->user();
      View::share('user', $this->user);
      return $next($request);
    });
    \Debugbar::disable();
    View::share('titulo', '');
  }
  
  /**
  * Share with view
  *
  * @param Request $request
  * @return void
  */
  private function share(Request $request) {
    
  }
}
