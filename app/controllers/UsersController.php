<?php

class UsersController extends BaseController {


		public function login()
	{
		if (Request::isMethod('POST'))
		{
			
			if(Auth::attempt(['email'=>Input::get('email'),'password'=>Input::get('password')]))
			{  
			

				if(Auth::user()->statut =='admin'){
					return Redirect::route('dash')->with(['notif'=>['message'=>'Vous étes connecté','type'=>'success']]);
				}
				
				
		
				return Redirect::back()->with(['notif'=>['message'=>'Vous étes connecté','type'=>'success']]);
			}
		}
		
		$user = new User();
		$this->layout->nest('content','Users.login',compact('user'));
	}
	/**
	* 
	**/
	function signup(){

		if (Request::isMethod('POST'))
		{
			dd(Input::all());
			$validation = Validator::make(Input::all(), User::$rules );

			if($validation->fails()){
				return Redirect::back()->withInput()->withErrors($validation);
			}
	
			
			$user=new User(Input::all());
			$user->password=Hash::make( Input::get('password'));
			$user->save();
			return Redirect::route('login')->with(['notif'=>['message'=>'Votre compte est crée','type'=>'success']]);
			
		}
		if(Auth::check()){
			$user= User::find(Auth::id());
		}else{
			$user =new User();
		}
				
		$this->layout->nest('content','Users.signup',compact('user'));
	}





}
