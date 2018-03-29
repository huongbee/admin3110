<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role == "admin"){
            return $next($request);
        }
        else{
            return redirect()->route('home')
                ->with(['error'=>'Bạn không có quyền truy cập trang này, vui lòng liên hệ admin']);
        }
    }
}
