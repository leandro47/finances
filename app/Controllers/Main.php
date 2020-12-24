<?php

namespace App\Controllers;

class Main extends BaseController
{
	public function __construct()
	{
		$this->data['titlePage'] = 'Home';
	}

	// ==================================================

	public function index()
	{
		echo view('includes/header', $this->data);
		echo view('includes/menu', $this->data);
		echo view('dashboard/welcome', $this->data);
		echo view('includes/footer', $this->data);
		echo view('includes/scripts', $this->data);
	}

	// ==================================================

}
