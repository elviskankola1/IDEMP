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
        <h2 style="margin-top:0px">Noirs <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NomNoir <?php echo form_error('nomNoir') ?></label>
            <input type="text" class="form-control" name="nomNoir" id="nomNoir" placeholder="NomNoir" value="<?php echo $nomNoir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">EmailNoir <?php echo form_error('emailNoir') ?></label>
            <input type="text" class="form-control" name="emailNoir" id="emailNoir" placeholder="EmailNoir" value="<?php echo $emailNoir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PhotoNoir <?php echo form_error('photoNoir') ?></label>
            <input type="text" class="form-control" name="photoNoir" id="photoNoir" placeholder="PhotoNoir" value="<?php echo $photoNoir; ?>" />
        </div>
	    <input type="hidden" name="idNoir" value="<?php echo $idNoir; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('noirs') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>