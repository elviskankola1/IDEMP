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
						
					</ul>
					<ul class="notification list-unstyled user-profile">
						<li><a href="#"><img src="" title="notifications" width="10%"/></a>
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
					<?php if($detail):?>
					<?php foreach($detail as $identity):?>
					<div class="col-1 col-md-4">
							<div class="user-profile1 text-center">
								<img src="<?php echo base_url($identity->photoEmp);?>" title="<?php echo $identity->nomEmp;?>" width="100%"/>
							</div>
					</div>
                    <div class="col-1 col-md-5">
                        <br><h3><b style="color:rgb(200,40,20);">Nom complet:</b> <b><?php echo $identity->nomEmp;?>  <?php echo $identity->postnomEmp;?> <?php echo $identity->prenomEmp;?><b></h3>
                        <h3><b style="color:rgb(200,40,20);">date de naissance: </b><b><?php echo $identity->datenaissanceEmp;?></b></h3>
                        <h3><b style="color:rgb(200,40,20);">Age: </b><b><?php echo $stat;?> ans</h3>
                        <h3><b style="color:rgb(200,40,20);">genre: </b><b><?php echo $identity->genreEmp;?></h3>
                        <h3><b style="color:rgb(200,40,20);">matricule: </b><b><?php echo $identity->matriculeEmp;?></h3>
                        <h3><b style="color:rgb(200,40,20);">adresse email: </b><b><a href="mailto:<?php echo $identity->emailEmp;?>"><?php echo $identity->emailEmp;?></a></h3>
                        <h3><b style="color:rgb(200,40,20);">adresse a domicile: </b><b><?php echo $identity->adressehomeEmp;?></h3>
                        <?php if($stat > 50):?>

                        <h3><div class="p-btn" style="background:rgb(200,20,70)">bientot pensionne</div><h3>
                        <?php else:?>
                        <h3><div class="p-btn" style="background:rgb(20,200,70)">Valide</div></h3>
                        <?php endif?>
                       
                    </div>
                    <div class="col-1 col-md-3">
							<div class="user-profile1 text-center">
							<form method="POST" action="<?php echo site_url('user_show/AddListBack');?>">
								<input type="hidden" name="nom" value="<?php echo $identity->nomEmp;?>">
								<input type="hidden" name="email" value="<?php echo $identity->emailEmp;?>">
								<input type="hidden" name="file" value="<?php echo $identity->photoEmp;?>">
								<input type ="submit" class="p-btn" style="background:rgb(0,0,70)" value="Liste noire">
							</form>
							<h4><?php echo $this->session->error;?></h4>
							</div>
							
					    </div>
                        
					<?php endforeach ?>
					<?php else:?>
						<h5>probleme de connexion</h5>
					<?php endif?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</body>
</html>

