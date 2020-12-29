<?php

namespace App\Services;

use App\Repositories\AccountRepository;
use CodeIgniter\HTTP\Response;

class AccountServices
{

    public function getAccount(int $idUser): ? array
    {
        $accountRepository = new AccountRepository;
        return $accountRepository->getAccontByID($idUser);
    }
}
