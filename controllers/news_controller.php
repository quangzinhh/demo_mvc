<?php
require_once('controllers/base_controller.php');

class NewsController extends BaseController
{
	function __construct()
	{
		$this->folder = 'news';
	}

	public function index()
	{
		$this->render('index');
	}
}
