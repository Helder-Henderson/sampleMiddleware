<?php

namespace App\Middlewares;

use App\Http\Response;
use App\Http\Request;
use App\Middlewares\IMiddleware;

class SecondMiddleware implements IMiddleware
{
  public function handle(Request $request, Response $response, \Closure $next): Response
  {
    if ($response->autenticado) {
      $response->autorizado = true;
    }
    return $next($request, $response);
  }
}
