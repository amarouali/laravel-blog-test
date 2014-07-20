<?php 
class AdminController extends BaseController  {
	public $layout ="Layouts.admin";
	
	function dash(){
		$this->layout->nest('content','Admin.dash');
		
	}
}

 ?>