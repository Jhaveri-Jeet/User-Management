<?php

use App\Http\Controllers\AssignRoleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAuth;

Route::middleware([UserAuth::class])->group(function () {

    // Pages Routes
    Route::view('/', 'index');
    Route::view('/addRole', 'pages.addRole');
    Route::view('/assignedRoles', 'pages.assignedRoles');
    Route::view('/manager', 'pages.manager');
    Route::view('/volunteer', 'pages.volunteer');
    Route::view('/doner', 'pages.doner');
    Route::view('/renter', 'pages.renter');

    // Users Routes
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/addUser', [UserController::class, 'addUserPage']);
    Route::get('/viewUser/{id}', [UserController::class, 'viewUserPage']);
    Route::post('/insertUser', [UserController::class, 'insertUser']);
    Route::get('/updateUser/{id}', [UserController::class, 'updateUserPage']);
    Route::put('/updateUserData/{id}', [UserController::class, 'updateUserData']);
    Route::delete('/deleteUser/{id}', [UserController::class, 'deleteUser']);

    // Roles Routes
    Route::get('/roles', [RoleController::class, 'index']);
    Route::post('/insertRole', [RoleController::class, 'insertRole']);
    Route::put('/updateRole/{id}', [RoleController::class, 'updateRole']);
    Route::delete('/deleteRole/{id}', [RoleController::class, 'deleteRole']);

    // Assign Role Routes
    Route::get('/assignedRoles', [AssignRoleController::class, 'assignedRoles']);
    Route::get('/unassignedUserRole/{userId}/{roleId}', [AssignRoleController::class, 'unassignedUserRole']);
    Route::get('/assignedUserRole/{userId}/{roleId}', [AssignRoleController::class, 'assignedUserRole']);
});

// Auth Routes
Route::post('/checkUser', [AuthController::class, 'checkUser']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::view('/login', 'pages.login');
