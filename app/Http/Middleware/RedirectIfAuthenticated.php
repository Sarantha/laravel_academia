<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use User;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        /*switch($guard){
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('admin');
                }
            break;
            case 'student':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('students');
                }
            break;
            case 'teacher':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('teacher');
                }
            break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/');
                }
            break;
        }*/
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->user_role == 'admin'){
                return redirect ('admin');
            }elseif(Auth::user()->user_role == 'student'){
                return redirect ('students');
            }else{
                return redirect('teachers');
            }
        }

        return $next($request);
    }
}
