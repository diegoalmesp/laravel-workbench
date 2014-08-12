<?php

class HomeController extends BaseController {

	protected $layout = 'templates.frontend';

	public function showWelcome()
	{
		return View::make('static.welcome');
	}

	public function showAbout()
	{
		return View::make('static.about');
	}

}
