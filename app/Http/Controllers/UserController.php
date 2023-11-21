<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return $this->userService->getAllUsers();
    }

    public function show($id)
    {
        return $this->userService->getUserById($id);
    }

    public function store(UserRequest $request)
    {
        return $this->userService->createUser($request->validated());
    }

    public function update(UserRequest $request, $id)
    {
        return $this->userService->updateUser($id, $request->validated());
    }

    public function destroy($id)
    {
        return $this->userService->deleteUser($id);
    }
}
