<?php
require_once('controllers/base_controller.php');

class ServiceController extends BaseController
{
	function __construct()
	{
		$this->folder = 'service';
	}

	public function index()
	{
		$this->render('index');
	}
}
