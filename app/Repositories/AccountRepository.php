<?php

namespace App\Repositories;

use App\Models\AccountModel;

class AccountRepository
{
    protected $account;

    public function getAccontByID(int $idUser)
    {
        $account = new AccountModel();

        return $account->where([
            'idUser' => $idUser
        ])->get()->getResult();
    }
}
