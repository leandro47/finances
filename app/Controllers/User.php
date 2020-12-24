<?php

namespace App\Controllers;

use App\Validation\UserValidation;
use App\Services\UserServices;

class User extends BaseController
{
	public function __construct()
	{
		$this->data['titlePage'] = 'Login';
	}

	//--------------------------------------------------------------------

	public function index()
	{
		echo view('includes/header', $this->data);
		echo view('user/login', $this->data);
		echo view('includes/footer', $this->data);
		echo view('includes/scripts', $this->data);
	}

	//--------------------------------------------------------------------

	public function login()
	{
		$this->validate = UserValidation::validateAuth($this->request);

		if ($this->validate) {

			$this->data['validation'] = $this->validate;
			$this->index();
		} else {

			$userServices = new UserServices();

			$result = $userServices->auth($this->request);

			if (!$result) {

				return redirect()->to(base_url('main'));
			} else {

				$this->data['validation'] = $result;
				$this->index();
			}
		}
	}
}
