<?php

namespace App\Middlewares;

use App\Http\Response;
use App\Http\Request;
use \App\Middlewares\IMiddleware;

class FirstMiddleware implements IMiddleware
{
  public function handle(Request $request, Response $response, \Closure $next): Response
  {
    $request->user = ["nome" => "Helder", "Id" => 1];
    $response->autenticado = True;
    return $next($request, $response);
  }
}
