<?php
require_once('controllers/base_controller.php');

class IntroController extends BaseController
{
	function __construct()
	{
		$this->folder = 'intro';
	}

	public function index()
	{
		$this->render('index');
	}
}
