<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
	{
		$this->middleware('guest');
		
	}

    public function index(){
    	return view('welcome');
    }
    public function postAdTreeJson()
	{
		return file_get_contents(__SITE_PATH . 'js/constant.js');
	}

}
