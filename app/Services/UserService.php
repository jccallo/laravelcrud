<?php

namespace App\Services;

use App\Http\Resources\UserResource;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        $perPage = intval(request('per_page'));
        $users = $perPage ? $this->userRepository->paginate($perPage) : $this->userRepository->getAll();
        return UserResource::collection($users);
    }

    public function getUserById($id)
    {
        return new UserResource($this->userRepository->findById($id));
    }

    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return new UserResource($this->userRepository->create($data));
    }

    public function updateUser($id, array $data)
    {
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        return new UserResource($this->userRepository->update($id, $data));
    }

    public function deleteUser($id)
    {
        return new UserResource($this->userRepository->delete($id));
    }
}
