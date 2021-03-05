<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return "This is the Pages Controller -> Index Function";
	}

	public function showme($page = 'home')
	{   
		 return 'This Page is '.$page;
	}
}
