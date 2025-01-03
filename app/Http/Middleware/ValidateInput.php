<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateInput
{
    public function handle(Request $request, Closure $next)
    {
        $input = $request->all();

        // Validasi input
        if (isset($input['name']) && !is_string($input['name'])) {
            return response()->json(['error' => 'Invalid input'], 400);
        }

        return $next($request);
    }
}
