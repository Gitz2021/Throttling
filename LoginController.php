//In application/controllers/Login.php
<?php 

class LoginController extends MyController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

  //this will be a post method sent from login form.
	public function doLogin()
	{
		$throttler = \Config\Services::throttler();
		$allowed = $throttler->check('login', 4, MINUTE);
		//login is identifier or you can say key.
		//4 is limit (how much operation we want to perform)
		//MINUTE is constant in CI4 which is equivalent to 60, and here 60 is seconds.
    		if($allowed) {
      			//do your login process
    		}
    		else {
      			//return error or do nothing according to your need.
    		}
	}
}
