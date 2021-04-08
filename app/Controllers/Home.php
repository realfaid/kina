<?php

namespace App\Controllers;

class Home extends BaseController
{

	
	public function hlavni()
	{
		echo view("head");
		echo view("uvod");
	}
}
