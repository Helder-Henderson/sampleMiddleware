<?php

namespace App\Middlewares;

use App\Http\Request;
use App\Http\Response;

interface IMiddleware
{
  public function handle(Request $request, Response $response, \Closure $next): Response;
}
