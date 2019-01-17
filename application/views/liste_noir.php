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
						<a href="#menu-left"><img src="<?php echo base_url('assets/img/drop.png');?>" title="notifications" /></a>

					</div>
					<nav id="menu-left">
						<ul>
						<li><a href="#"><img src="<?php echo base_url('assets/img/ow.jpg');?>" title="notifications" width="20%"/> <b>OUR-REPERTOIRE</b></a>
							<li><a href="<?php echo site_url();?>">TOUS LES AGENTS</a></li>
							<li class="active"><a href="<?php echo site_url('user_show/PresenceEmp');?>">Presence</a></li>
							<li><a href="<?php echo site_url('user_show/formulaire');?>">creer un agent</a></li>
							<li><a href="<?php echo site_url('user_show/formulaire');?>">Liste noir</a></li>
						</ul>
					</nav>
				</div>
				<div class="logo">
					<span>LISTE NOIRE</span>
				</div>
				<div class="usernotifications">
					<ul class="notification list-unstyled user-profile">
						<li><a href="#"><img src="<?php echo base_url('assets/img/notification-icon.png');?>" title="notifications" /><b><?php echo $totalemployer;?></b></a>
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
					<?php if($black):?>
					<?php foreach($black as $identity):?>
					<div class="col-1 col-md-3">
							<div class="user-profile1 text-center">
								<img src="<?php echo base_url($identity->photoNoir);?>" title="<?php echo $identity->nomNoir;?>" width="100%"/>
								<h3><?php echo $identity->nomNoir;?></h3>
								<p><?php echo $identity->emailNoir;?> </p>
								<a class="p-btn" href="<?php echo site_url('user_show/DeleteListBack').'/'.$identity->idNoir;?>">Supprimer</a>
							</div><br>
					</div>
					<?php endforeach ?>
					<?php else:?>
						<b><h1 style="text-align:center;">Aucun Resultat</h1></b>
					<?php endif?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</body>
</html>

