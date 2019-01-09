<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;;

class Handler extends ExceptionHandler
{

  protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
          return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        $guard = array_get($exception->guards(), 0);

        switch ($guard) {
          case 'usuarios':
            $login = '/autenticacao';
            break;
          default:
            $login = 'backend/login';
            break;
        }

        return redirect()->guest($login);
    }
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
