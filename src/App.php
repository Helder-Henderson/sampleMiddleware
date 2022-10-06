<?php

namespace App;

use App\Http\Request;
use App\Http\Response;
use App\Middlewares\MiddlewaresHandler;

class App
{
  protected $request;
  protected $response;
  protected $middlewares = [
    \App\Middlewares\FirstMiddleware::class,
    \App\Middlewares\SecondMiddleware::class
  ];

  public function __construct()
  {
    $this->request = new Request();
    $this->response = new Response();
  }



  public function index()
  {
    
    MiddlewaresHandler::executeMiddlewares($this->middlewares, $this->request, $this->response);
    echo '<pre>';
    var_dump($this->request);
    var_dump($this->response);
    echo 'Core da aplicação';
  }
}
