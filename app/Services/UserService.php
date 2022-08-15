<?php

namespace App\Services;

use App\Models\UserModel;
use App\Repositories\MySQLUserRepository;

class UserService
{
    private MySQLUserRepository $mySQLUserRepository;

    public function __construct(MySQLUserRepository $mySQLUserRepository)
    {
        $this->mySQLUserRepository = $mySQLUserRepository;
    }

    public function execute(int $id): UserModel
    {
        $user = $this->mySQLUserRepository->getUserById($id);
        return new UserModel($user->getId(), $user->getName(), $user->getSurname(), $user->getEmail());
    }
}
