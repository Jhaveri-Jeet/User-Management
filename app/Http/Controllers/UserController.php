<?php

namespace App\Http\Controllers;

use App\Models\roles;
use App\Models\users;
use App\Models\userRoles;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.users', ['allUsers' => users::all()]);
    }

    public function addUserPage()
    {
        return view('pages.addUser', ['roles' => roles::all()]);
    }
    public function viewUserPage($id)
    {
        $user_roles = userRoles::where('user_id', $id)->get();
        $users = users::where('id', $id)->first();
        return view('pages.viewUser', ['user_roles' => $user_roles, 'users' => $users]);
    }
    public function updateUserPage($id)
    {
        $user_roles = userRoles::where('user_id', $id)->get();
        $users = users::where('id', $id)->first();
        return view('pages.updateUser', ['user_roles' => $user_roles, 'users' => $users]);
    }



    public function insertUser(Request $request)
    {
        $hashedPassword = bcrypt($request->password);

        $user = new users;
        $user->mobile = $request->mobile;
        $user->password = $hashedPassword;
        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->nick_name = $request->nickName;
        $user->address_1 = $request->address1;
        $user->address_2 = $request->address2;
        $user->area = $request->area;
        $user->pincode = $request->pincode;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->email = $request->email;
        $user->second_number = $request->secondNumber;
        $user->birthdate = $request->birthdate;
        $user->anniversary_date = $request->anniversaryDate;
        $user->spouse_first_name = $request->spouseFirstName;
        $user->spouse_last_name = $request->spouseLastName;
        $user->spouse_birthdate = $request->spouseBirthdate;
        $user->sopuse_nick_name = $request->spouseNickName;

        $user->save();

        if ($user->save()) {

            $user_role = new userRoles;
            $user_role->user_id = $user->id;
            $user_role->role_id = $request->selectedRole;

            $user_role->save();
            return response()->json(['success' => 'User created successfully'], JsonResponse::HTTP_CREATED);
        } else
            return response()->json(['error' => 'Failed to create user'], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function updateUserData(Request $request, $id){
        $users = users::where('id', $id)->first();
        $users->first_name = $request->firstName;
        $users->last_name = $request->lastName;
        $users->nick_name = $request->nickName;
        $users->mobile = $request->mobile;
        $users->address_1 = $request->address1;
        $users->address_2 = $request->address2;
        $users->area = $request->area;
        $users->pincode = $request->pincode;
        $users->city = $request->city;
        $users->state = $request->state;
        $users->country = $request->country;
        $users->email = $request->email;
        $users->second_number = $request->secondNumber;
        $users->birthdate = $request->birthdate;
        $users->anniversary_date = $request->anniversaryDate;
        $users->spouse_first_name = $request->spouseFirstName;
        $users->spouse_last_name = $request->spouseLastName;
        $users->spouse_birthdate = $request->spouseBirthdate;
        $users->sopuse_nick_name = $request->spouseNickName;
        $users->save();
        return response()->json(['success' => 'User updated successfully'], JsonResponse::HTTP_OK);

    }

    public function deleteUser($id)
    {
        $user = users::where('id', $id)->first();

        if (!$user)
            return response()->json(['error' => 'User not found'], JsonResponse::HTTP_NOT_FOUND);

        $user->delete();
        return response()->json(['success' => 'User deleted successfully'], JsonResponse::HTTP_OK);
    }
}
