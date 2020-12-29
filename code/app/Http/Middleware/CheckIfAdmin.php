<?php

 namespace App\Http\Middleware;

 use Closure;
 use Illuminate\Http\Request;

 class CheckIfAdmin
 {
     /**
      * Handle an incoming request.
      *
      * @param \Illuminate\Http\Request $request
      * @param \Closure $next
      * @return mixed
      */
     public function handle(Request $request, Closure $next)
     {
         $user = $request->user();

         if (!isset($user)) {
             return redirect('404');
         }

         if (!$user->isAdmin()) {
             return redirect('/');
         }

         return $next($request);
     }
 }
