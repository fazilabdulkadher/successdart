<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Template</title>
<link rel="stylesheet" href="css/global.css" />
</head>
<body>
<div id="login_cont">
<img src="images/activ.png" class="actv_img"/>
	<form>
	<input type="text" class="login_textbx"  name="username:" value="username:" onfocus="if(this.value == 'username:')
	{ this.value = ''; }" onblur="if (this.value == '') { this.value='username:'; }" />
	<input type="password" class="login_textbx" name="password:" value="password:" onfocus="if(this.value == 'password:')
	{ this.value = ''; }" onblur="if (this.value == '') { this.value='password:'; }"/><br />
	<div class="remb_me">
	<input type="checkbox" />&nbsp;Remember me <img class="giff_ldr" src="images/ajax-loader.gif" /></div>
	<label class="wrng_msg">Username or Password is Incorrect.</label>
	<input type="submit" class="cmn_btn_small" value="LOGIN" onClick="window.open('comptncy.html');"/>
	<a href="#">Forgot Password</a>
	</form>
</div>
	<div class="header">
		<div class="header_includer">
			<div class="logo">
			<h1>SUCCESSDART</h1>
			</div>
			<nav>
				<ul>
					<li><a  class="cmn_btn_small" >Sign up </a></li>
						<li><a href="#">Product</a></li>
							<li><a href="#">features</a></li>
								<li><a href="#">projects</a></li>
					<li><a href="#" onclick="document.getElementById('login_cont').style.display='block'" >Sign in</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<footer>
	<div class="footr_lbl">
Copyright � 2013<label class="yelw"> Ruby Software</label>
	</div>
</footer>
</body>
</html>
