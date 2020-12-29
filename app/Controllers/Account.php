<?php

namespace App\Controllers;

use App\Services\AccountServices;

class Account extends BaseController
{
    protected $accountsService;

    public function __construct()
    {
        $this->data['titlePage']  = 'Contas';

    }

    public function show()
    {
        echo view('includes/header', $this->data);
        echo view('includes/menu', $this->data);
        echo view('account/index', $this->data);
        echo view('includes/footer', $this->data);
        echo view('includes/scripts', $this->data);
    }

    public function getAccount($allUsers = false)
    {
        $accountsService = new AccountServices();

        $idUser = intval(session()->get('id'));
        $accounts = $accountsService->getAccount($idUser);

        response($accounts);
    }
}
