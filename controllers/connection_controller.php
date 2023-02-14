<?php
require_once('controllers/base_controller.php');

class ConnectionController extends BaseController
{
	function __construct()
	{
		$this->folder = 'connection';
	}

	public function index()
	{
		$this->render('index');
	}
}
