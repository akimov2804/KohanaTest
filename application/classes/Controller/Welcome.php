<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

    public $template = 'loginView';

	public function action_action()
	{
		$this->template->content = View::factory('loginView');
	}

} // End Ajax
