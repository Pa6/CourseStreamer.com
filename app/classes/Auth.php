<?php

namespace CourseStreamer\Auth;

require_once(ANIMATE_POPOVER);

class Login extends Popover
{
	public function login(){
		if(!self::noMemberLoggedIN()){
			echo "we are having less people using this system!";
		}else{
			self::GiveLoginForm();
		}
	}
	public function noMemberLoggedIN($username="rci",$password="00"){
		if(!$username && !$password){
			return false;
		}else{
			return true;
		}
	}
	public function GiveLoginForm(){
		self::load_css();
		?>
			<div class="container">
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h6 class="text-center login-title">Sign in to coursestreamer</h6>
        <div class="account-wall">
            <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                alt="">
            <form class="form-signin">
            <input type="text" class="form-control" placeholder="Email" required autofocus>
            <input type="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Sign in</button>
            <label class="checkbox pull-left">
                <input type="checkbox" value="remember-me">
                Remember me
            </label>
            <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
            </form>
        </div>
        <a href="#" class="text-center new-account">Create an account </a>
    </div>
</div>
</div>
<?php
	}
}
$obj= new login();
$obj->login();

?>