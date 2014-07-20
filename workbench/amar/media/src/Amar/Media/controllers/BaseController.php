<?php namespace Amar\Media\controllers;
use Illuminate\Support\Facades\View;


use Controller;

class BaseController extends Controller {
public $layout='media::Layouts.default';
	public function __construct()
	{
		$this->beforeFilter('csrf', ['on' => 'post']);
		
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if (!is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}