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
        <h2 style="margin-top:0px">Employers Read</h2>
        <table class="table">
	    <tr><td>NomEmp</td><td><?php echo $nomEmp; ?></td></tr>
	    <tr><td>PostnomEmp</td><td><?php echo $postnomEmp; ?></td></tr>
	    <tr><td>PrenomEmp</td><td><?php echo $prenomEmp; ?></td></tr>
	    <tr><td>DatenaissanceEmp</td><td><?php echo $datenaissanceEmp; ?></td></tr>
	    <tr><td>GenreEmp</td><td><?php echo $genreEmp; ?></td></tr>
	    <tr><td>AdressehomeEmp</td><td><?php echo $adressehomeEmp; ?></td></tr>
	    <tr><td>EmailEmp</td><td><?php echo $emailEmp; ?></td></tr>
	    <tr><td>PhotoEmp</td><td><?php echo $photoEmp; ?></td></tr>
	    <tr><td>IdDossier</td><td><?php echo $idDossier; ?></td></tr>
	    <tr><td>DatefonctionEmp</td><td><?php echo $datefonctionEmp; ?></td></tr>
	    <tr><td>MatriculeEmp</td><td><?php echo $matriculeEmp; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('employers') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>