<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
    	// if (!Auth::check()) {
     //        return redirect('/nav');
     //    }

     //    $user = Auth::user();

     //    if ($user->role !== $role) {
     //        return redirect('/'); // or any other page you want
     //    }

     //    return $next($request);
    	if($request->user()->role !== $role){
            return redirect('navbar');
        }
        return $next($request);
    }
}
