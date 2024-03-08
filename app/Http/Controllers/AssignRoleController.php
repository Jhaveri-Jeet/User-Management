<?php

namespace App\Http\Controllers;

use App\Models\roles;
use App\Models\userRoles;
use App\Models\users;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AssignRoleController extends Controller
{

    public function assignedRoles()
    {
        return view('pages.assignedRoles', ['allUsers' => users::all(), 'userRoles' => userRoles::all(), 'roles' => roles::all()]);
    }
    
    public function unassignedUserRole($userId, $roleId)
    {
        $userRole = userRoles::where('user_id', $userId)->where('role_id', $roleId)->first();

        if (!$userRole)
            return view('pages.assignedRoles', ['allUsers' => users::all(), 'userRoles' => userRoles::all(), 'roles' => roles::all()]);

        $userRole->delete();
        return view('pages.assignedRoles', ['allUsers' => users::all(), 'userRoles' => userRoles::all(), 'roles' => roles::all()]);
    }

    public function assignedUserRole($userId, $roleId)
    {
        $user = users::where('id', $userId)->first();
        $role = roles::where('id', $roleId)->first();

        if (!$user || !$role)
            return response()->json(['error' => 'User or Role not found'], JsonResponse::HTTP_NOT_FOUND);

        $userRole = new userRoles;
        $userRole->user_id = $userId;
        $userRole->role_id = $roleId;
        $userRole->save();
        return view('pages.assignedRoles', ['allUsers' => users::all(), 'userRoles' => userRoles::all(), 'roles' => roles::all()]);
    }
}
