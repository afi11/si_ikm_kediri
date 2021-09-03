<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AkunTipe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        if(Auth::user()->tipe_akun == $level){
            return $next($request);
        }
        return redirect("/dashboard")->with('err_access','Anda tidak punya hak akses untuk mengakses halaman tersebut');
    }
}
