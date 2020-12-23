<?php

namespace App\Controllers;

class User extends BaseController
{
	public function __construct()
	{
		$this->datas['titlePage'] = 'Login';
	}


	public function index()
	{
		echo view('includes/header', $this->datas);
		echo view('includes/menu', $this->datas);
		echo view('dashboard/welcome', $this->datas);
		echo view('includes/footer', $this->datas);
		echo view('includes/scripts', $this->datas);
	}

	//--------------------------------------------------------------------

}
