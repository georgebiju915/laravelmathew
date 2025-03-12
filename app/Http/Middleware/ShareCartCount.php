<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class ShareCartCount
{
  
    public function handle($request, Closure $next)
    {  $user_id = Auth::id();
        $cart_count = DB::table('cart')->where('user_id', $user_id)->count();
        view()->share('cart_count', $cart_count);

        return $next($request);
    }
}
