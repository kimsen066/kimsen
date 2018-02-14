<?php
namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
  public function handle($request,Closure $next)
  {
    $data = [
      ['name'=>'taro','mail'=>'taro@yamada'],
      ['name'=>'taro','mail'=>'taro@yamada'],
      ['name'=>'taro','mail'=>'taro@yamada'],
    ];
    $request->merge(['data'=>$data]);
    return $next($request);
  }
}
