<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Success Dart</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	 <!-- boostrap customize -->
    <link href="css/bootstrap-customize.css" rel="stylesheet">
	
	<!-- customize -->
	<link href="css/customize.css" rel="stylesheet">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SuccessDart</a>
    </div>
    <div class="collapse navbar-collapse pull-right">
      <ul class="nav navbar-nav navbar-nav-margin">
        <li class="active"><a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
			<ul class="dropdown-menu pull-right">
                           <li>
                              <a href="#"><b><span class="glyphicon glyphicon-cog col-xs-pull-1"></span></b>Manage Profile</a><i class="icon-arrow-right"></i></a>
                           </li>
                           <li class="divider"></li>
                           <li><a href="#"><b><span class="glyphicon glyphicon-off col-xs-pull-1"></span></b>Logout</a></a></li>
                        </ul>
		</li>
      </ul>
    </div><!--/.nav-collapse -->
</div><!--/.navbar -->


<div class="row-offcanvas row-offcanvas-left">
<!--Sidebar-->
  <div id="sidebar" class="sidebar-offcanvas">
      <div class="col-md-12 padding-none">
        <div class="col-lg-12 user-cont">
		<img data-src="holder.js/140x140" src="images/mathew1.jpg" alt="User Profile" class="img-circle img-responsive-custom profile-pics-sidebar">
        <div class="user-details">
		<h5 class="bold h-margin-bottom">Mathew Varghese</h5>
		<h6 class="h1-margin user-desgntn">Product Manager</h6>
		</div>
		</div>
		<div class="clearfix"></div>
		<ul id="myTab" class="nav nav-pills nav-stacked">
          <li class="active"><a href="#"><div class="glyphicon glyphicon-home"></div><span class="col-xs-offset-1">Home</span></a></li>
          <li><a href="#"><div class="glyphicon glyphicon-user"></div><span class="col-xs-offset-1">Self Evaluation</span><span class="label label-warning pull-right">16/24</span></a></li>
          <li><a  href="#"><div class="glyphicon glyphicon-certificate"></div><span class="col-xs-offset-1">Goal Settings</span><span class="label label-success m-l-5 pull-right">NEW</span></a>
		  </li>
          <li><a id="maian-menu" href="#"><div class="glyphicon glyphicon-stats"></div><span class="col-xs-offset-1">Report</span><b class="caret pull-right"></b></a>
		  <ul class="submenu-item" id="submenu-item1">
		  <li><a href="#">Sub menu option 1</a></li>
		  <li><a href="#">Sub menu option 2</a></li>
		  </ul>
		  </li>
		  <li><a href="#"><div class="glyphicon glyphicon-book"></div><span class="col-xs-offset-1">Help</span></a></li>
		 </ul> 
      </div>
  </div>
<!-- Sidebar Ends-->
  <div id="main">
      <div class="col-md-12">
      	  <p>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas" id="toggle"><i class="glyphicon glyphicon-align-justify">
			</i></button>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          </p>
          <h2>Successdart fluid layouts</h2>
          <div class="row">
              <div class="col-md-12"><div class="well"><p>12 cols</p></div></div>
          </div>
          <div class="row">
              <div class="col-md-4"><div class="well"><p>4 cols</p></div></div>
              <div class="col-md-4"><div class="well"><p>4 cols</p></div></div>
              <div class="col-md-4"><div class="well"><p>4 cols</p></div></div>
          </div>
          <div class="row">
              <div class="col-lg-6 col-sm-6"><div class="well"><p>6 cols, 6 small cols</p></div></div>
              <div class="col-lg-6 col-sm-6"><div class="well"><p>6 cols, 6 small cols</p></div></div>
          </div>
          <div class="row">
              <div class="col-lg-4 col-sm-6"><div class="well">4 cols, 6 small cols</div></div>
              <div class="col-lg-4 col-sm-6"><div class="well">4 cols, 6 small cols</div></div>
              <div class="col-lg-4 col-sm-12"><div class="well">4 cols, 12 small cols</div></div>
          </div><br>
<!--<div class="footer col-lg-12">Footer</div>-->
      </div>
	
  </div>
</div><!--/row-offcanvas -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
	   <!-- jQueryUI (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<!-- customize javascript -->
	<script src="js/customize.js"></script>
  </body>
</html>