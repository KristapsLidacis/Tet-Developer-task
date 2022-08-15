<?php

namespace App\Models;

class UserModelList
{
    private array $users = [];

    public function __construct(array $list)
    {
        foreach ($list as $users) {
            $this->add(new UserModel(
                $users->id,
                $users->first_name,
                $users->last_name,
                $users->email
            ));
        }
    }

    private function add(UserModel $user): void
    {
        $this->users[] = $user;
    }

    public function getUsers(): array
    {
        return $this->users;
    }
}
