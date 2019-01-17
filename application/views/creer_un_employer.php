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
					<span>CREER UN AGENT</span>
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
<?php echo form_open_multipart('user_show/CreateEmployer');?>
    <div class="get-in-touch-text-boxs">
    <div class="get-in-touch-text-box">
        <span>Nom <label>*</label></span>
        <input type="text" name="nom" value="<?php echo set_value('nom');?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
    </div>
    <?php echo form_error('nom');?><br>
    <div class="get-in-touch-text-box">
        <span>PostNom <label>*</label></span>
        <input type="text" name="postnom" value="<?php echo set_value('postnom');?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
    </div>
    <?php echo form_error('postnom');?><br>
    <div class="get-in-touch-text-box">
        <span>PreNom <label>*</label></span>
        <input type="text" name="prenom" value="<?php echo set_value('prenom');?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
    </div>
    <?php echo form_error('prenom');?><br>
    <div class="get-in-touch-text-box">
        <span>Date de naissance <label>*</label></span>
        <input type="date" name="datenaissance" value="<?php echo set_value('datenaissance');?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
    <div>
    <?php echo form_error('datenaissance');?><br>
    <div class="get-in-touch-text-box">
        <select name="genre">
            <option>F</option>
            <option>M</option>
        </select>
    </div>
    <?php echo form_error('genre');?><br>
    <div class="get-in-touch-text-box">
        <span>Email <label>*</label></span>
        <input type="email" name="email" value="<?php echo set_value('email');?>"  onblur="if (this.value == '') {this.value = '';}">
    </div>
    <?php echo form_error('email');?><br>
    <div class="get-in-touch-text-box">
        <span>Adresse <label>*</label></span>
        <input type="text" name="adressehome" value="<?php echo set_value('adressehome');?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
    </div>
    <?php echo form_error('adressehome');?><br>
    <div class="get-in-touch-text-box">
        <span>Image <label>*</label></span>
    <input type="file" name="userfile">
    </div>
    <input type="submit" value="send">
    </div>
<?php echo form_close();?>
</div>
</html>