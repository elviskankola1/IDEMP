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
        <h2 style="margin-top:0px">Dossier <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">DiplomeetatDossier <?php echo form_error('diplomeetatDossier') ?></label>
            <input type="text" class="form-control" name="diplomeetatDossier" id="diplomeetatDossier" placeholder="DiplomeetatDossier" value="<?php echo $diplomeetatDossier; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">DiplomesupDossier <?php echo form_error('diplomesupDossier') ?></label>
            <input type="text" class="form-control" name="diplomesupDossier" id="diplomesupDossier" placeholder="DiplomesupDossier" value="<?php echo $diplomesupDossier; ?>" />
        </div>
	    <div class="form-group">
            <label for="lettredemandeDossier">LettredemandeDossier <?php echo form_error('lettredemandeDossier') ?></label>
            <textarea class="form-control" rows="3" name="lettredemandeDossier" id="lettredemandeDossier" placeholder="LettredemandeDossier"><?php echo $lettredemandeDossier; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Annex1Dossier <?php echo form_error('annex1Dossier') ?></label>
            <input type="text" class="form-control" name="annex1Dossier" id="annex1Dossier" placeholder="Annex1Dossier" value="<?php echo $annex1Dossier; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Annex2Dossier <?php echo form_error('annex2Dossier') ?></label>
            <input type="text" class="form-control" name="annex2Dossier" id="annex2Dossier" placeholder="Annex2Dossier" value="<?php echo $annex2Dossier; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Annex3Dossier <?php echo form_error('annex3Dossier') ?></label>
            <input type="text" class="form-control" name="annex3Dossier" id="annex3Dossier" placeholder="Annex3Dossier" value="<?php echo $annex3Dossier; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NomEmpDossier <?php echo form_error('nomEmpDossier') ?></label>
            <input type="text" class="form-control" name="nomEmpDossier" id="nomEmpDossier" placeholder="NomEmpDossier" value="<?php echo $nomEmpDossier; ?>" />
        </div>
	    <input type="hidden" name="idDossier" value="<?php echo $idDossier; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('dossier') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>