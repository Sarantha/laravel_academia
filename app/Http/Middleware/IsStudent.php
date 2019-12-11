<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class IsStudent
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
        if(Auth::user()){
            if(Auth::user()->user_role == 'student'){
                return redirect('students');
            }
        }
        return redirect ('login');
    }
}
