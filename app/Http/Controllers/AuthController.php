<?php

namespace App\Http\Controllers;

use App\Models\userRoles;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function checkUser(Request $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            return response()->json(['error' => 'Unauthorized'], JsonResponse::HTTP_ACCEPTED);

        $userRole = userRoles::with('role')->where('user_id', Auth::user()->id)->first();
        session(['role' => $userRole->role->name]);
        return response()->json(['success' => 'Authorized'], JsonResponse::HTTP_OK);;
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
