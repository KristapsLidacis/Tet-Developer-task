<?php

namespace App\Services;

use App\Models\UserModelList;
use App\Repositories\MySQLUserRepository;


class UsersService
{

    private MySQLUserRepository $mySQLUserRepository;

    public function __construct(MySQLUserRepository $mySQLUserRepository)
    {
        $this->mySQLUserRepository = $mySQLUserRepository;
    }

    public function execute(): UserModelList
    {
        return $this->mySQLUserRepository->getUsers();
    }


}
