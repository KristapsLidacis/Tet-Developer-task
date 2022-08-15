<?php

namespace App\Interfaces;

use App\Models\ItemsModelList;
use App\Models\UserModel;
use App\Models\UserModelList;

interface UserRepository
{
    public function getUserById(int $id): UserModel;

    public function getUserItems(int $id): ItemsModelList;

    public function getUsers(): UserModelList;
}
