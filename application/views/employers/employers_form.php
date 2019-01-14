<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Employers <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NomEmp <?php echo form_error('nomEmp') ?></label>
            <input type="text" class="form-control" name="nomEmp" id="nomEmp" placeholder="NomEmp" value="<?php echo $nomEmp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PostnomEmp <?php echo form_error('postnomEmp') ?></label>
            <input type="text" class="form-control" name="postnomEmp" id="postnomEmp" placeholder="PostnomEmp" value="<?php echo $postnomEmp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PrenomEmp <?php echo form_error('prenomEmp') ?></label>
            <input type="text" class="form-control" name="prenomEmp" id="prenomEmp" placeholder="PrenomEmp" value="<?php echo $prenomEmp; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">DatenaissanceEmp <?php echo form_error('datenaissanceEmp') ?></label>
            <input type="text" class="form-control" name="datenaissanceEmp" id="datenaissanceEmp" placeholder="DatenaissanceEmp" value="<?php echo $datenaissanceEmp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">GenreEmp <?php echo form_error('genreEmp') ?></label>
            <input type="text" class="form-control" name="genreEmp" id="genreEmp" placeholder="GenreEmp" value="<?php echo $genreEmp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">AdressehomeEmp <?php echo form_error('adressehomeEmp') ?></label>
            <input type="text" class="form-control" name="adressehomeEmp" id="adressehomeEmp" placeholder="AdressehomeEmp" value="<?php echo $adressehomeEmp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">EmailEmp <?php echo form_error('emailEmp') ?></label>
            <input type="text" class="form-control" name="emailEmp" id="emailEmp" placeholder="EmailEmp" value="<?php echo $emailEmp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PhotoEmp <?php echo form_error('photoEmp') ?></label>
            <input type="text" class="form-control" name="photoEmp" id="photoEmp" placeholder="PhotoEmp" value="<?php echo $photoEmp; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">IdDossier <?php echo form_error('idDossier') ?></label>
            <input type="text" class="form-control" name="idDossier" id="idDossier" placeholder="IdDossier" value="<?php echo $idDossier; ?>" />
        </div>
	    <div class="form-group">
            <label for="year">DatefonctionEmp <?php echo form_error('datefonctionEmp') ?></label>
            <input type="text" class="form-control" name="datefonctionEmp" id="datefonctionEmp" placeholder="DatefonctionEmp" value="<?php echo $datefonctionEmp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MatriculeEmp <?php echo form_error('matriculeEmp') ?></label>
            <input type="text" class="form-control" name="matriculeEmp" id="matriculeEmp" placeholder="MatriculeEmp" value="<?php echo $matriculeEmp; ?>" />
        </div>
	    <input type="hidden" name="idEmp" value="<?php echo $idEmp; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('employers') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>