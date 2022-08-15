<?php

namespace App\Repositories;

use App\Models\ItemsModelList;
use App\Models\UserModel;
use App\Models\UserModelList;
use Illuminate\Support\Facades\DB;
use App\Interfaces\UserRepository;

class MySQLUserRepository implements UserRepository
{
    public function getUsers(): UserModelList
    {
        return new UserModelList(DB::select('select * from users'));
    }

    public function getUserById(int $id): UserModel
    {
        $user = DB::select('select * from users where id = ?', [$id]);
        return new UserModel($user[0]->id, $user[0]->first_name, $user[0]->last_name, $user[0]->email);
    }

    public function getUserItems(int $id): ItemsModelList
    {
        return new ItemsModelList(DB::select('select * from items where user_id= ?', [$id]));
    }
}
