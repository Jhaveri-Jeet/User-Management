<?php

namespace App\Http\Controllers;

use App\Models\roles;
use App\Models\userRoles;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\users;

class RoleController extends Controller
{
    public function index()
    {
        return view('pages.roles', ['roles' => roles::all()]);
    }
    public function assignedRoles()
    {
        
        return view('pages.assignedRoles', ['allUsers' => users::all(), 'userroles' => userRoles::all()]); 
    }

    public function insertRole(Request $request)
    {
        $role = new roles;
        $role->name = $request->name;
        $role->save();
        return response()->json(['success' => 'Role created successfully'], JsonResponse::HTTP_CREATED);
    }

    public function updateRole(Request $request, $id)
    {
        $role = roles::where('id', $id)->first();
        $role->name = $request->name;

        if (!$role)
            return response()->json(['error' => 'Role not found'], JsonResponse::HTTP_NOT_FOUND);

        $role->save();
        return response()->json(['success' => 'Role updated successfully'], JsonResponse::HTTP_OK);
    }

    public function deleteRole($id)
    {
        $role = roles::where('id', $id)->first();

        if (!$role)
            return response()->json(['error' => 'Role not found'], JsonResponse::HTTP_NOT_FOUND);

        $role->delete();
        return response()->json(['success' => 'Role deleted successfully'], JsonResponse::HTTP_OK);
    }
}
