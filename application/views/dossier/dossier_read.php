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
        <h2 style="margin-top:0px">Dossier Read</h2>
        <table class="table">
	    <tr><td>DiplomeetatDossier</td><td><?php echo $diplomeetatDossier; ?></td></tr>
	    <tr><td>DiplomesupDossier</td><td><?php echo $diplomesupDossier; ?></td></tr>
	    <tr><td>LettredemandeDossier</td><td><?php echo $lettredemandeDossier; ?></td></tr>
	    <tr><td>Annex1Dossier</td><td><?php echo $annex1Dossier; ?></td></tr>
	    <tr><td>Annex2Dossier</td><td><?php echo $annex2Dossier; ?></td></tr>
	    <tr><td>Annex3Dossier</td><td><?php echo $annex3Dossier; ?></td></tr>
	    <tr><td>NomEmpDossier</td><td><?php echo $nomEmpDossier; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('dossier') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>