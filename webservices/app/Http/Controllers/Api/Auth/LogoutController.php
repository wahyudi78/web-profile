<?php

namespace App\Http\Controllers\Api\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $revoke->user()->currentAccessToken()->delete();
        $request->user()->currentAccessToken()->delete();
    }
}
