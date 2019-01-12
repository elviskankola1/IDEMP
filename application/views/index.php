<!DOCTYPE HTML>
<html>
	<head>
		<title>HOME</title>
		<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel='stylesheet' type='text/css' />
		<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
		<link href="<?php echo base_url('assets/css/style.css');?>" rel='stylesheet' type='text/css' />
   		<link rel="stylesheet" href="<?php echo base_url('assets/fonts/css/font-awesome.min.css');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	</head>
	<body>
		<div class="container">
			<div class="top-header">
				<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mmenu.all.css');?>" />
				<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mmenu.js');?>"></script>
				<script type="text/javascript">
					$(function() {
						$('nav#menu-left').mmenu();
					});
				</script>
				<div id="page">
					<div id="header">
						<a href="#menu-left">essaie </a>
					</div>
					<nav id="menu-left">
						<ul>
							<li><a href="<?php echo site_url();?>">HOME</a></li>
							<li class="active"><a href="#">NOUVELLES</a></li>
							<li><a href="<?php echo site_url('user_show/formulaire');?>">creer un agent</a></li>
						</ul>
					</nav>
				</div>
				<div class="logo">
					<span>Liste agents</span>
				</div>
				<div class="usernotifications">
					<ul class="user-profile list-unstyled">
						<li><a href="#"><img src="images/user-pic.jpg" title="admin" /></a>
							<ul class="sub list-unstyled">
								<li><a href="#">Profile</a></li>
								<li><a href="#">Settings</a></li>
								<li><a href="#">custom</a></li>
							</ul>
						</li>
					</ul>
					<ul class="notification list-unstyled user-profile">
						<li><a href="#"><img src="images/notification-icon.png" title="notifications" /></a>
							<ul class="sub list-unstyled">
								<li><a href="#">20</a></li>
							</ul>
						</li>
					</ul>
					<ul class="logout list-unstyled">
						<li><a href="#"><span> </span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"> </div>
			<div class="content">
				<div class="3-cols">
					<?php if($employer):?>
					<?php foreach($employer as $identity):?>
					<div class="col-1 col-md-3">
							<div class="user-profile1 text-center">
								<img src="<?php echo base_url($identity->photoEmp);?>" title="name" width="100%"/>
								<h3><?php echo $identity->nomEmp;?></h3>
								<p><?php echo $identity->emailEmp;?> </p>
								<a class="p-btn" href="<?php echo site_url('user_show/DetailOneEp').'/'.$identity->idEmp;?>">Profile</a>
							</div>
					</div>
					<?php endforeach ?>
					<?php else:?>
						<h5>Aucun agent</h5>
					<?php endif?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</body>
</html>

