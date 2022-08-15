<?php

namespace App\Services;

use App\Models\ItemsModelList;
use App\Repositories\MySQLUserRepository;

class ItemsRequestService
{
    private MySQLUserRepository $mySQLUserRepository;

    public function __construct(MySQLUserRepository $mySQLUserRepository)
    {
        $this->mySQLUserRepository = $mySQLUserRepository;
    }

    public function execute($id): ItemsModelList
    {
        return $this->mySQLUserRepository->getUserItems($id);
    }


}
