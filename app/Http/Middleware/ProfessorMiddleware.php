<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;

class ProfessorMiddleware
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
        try {
            $user = JWTAuth::toUser($request->input('token'));
            if($user->type!="professor") 
               return response()->json(['error'=>'not a professor']);
        } catch (\Throwable $th) {
            return response()->json(['error'=>'something is wrong']);
        }
        return $next($request);
    }
}
