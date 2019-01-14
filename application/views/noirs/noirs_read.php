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
        <h2 style="margin-top:0px">Noirs Read</h2>
        <table class="table">
	    <tr><td>NomNoir</td><td><?php echo $nomNoir; ?></td></tr>
	    <tr><td>EmailNoir</td><td><?php echo $emailNoir; ?></td></tr>
	    <tr><td>PhotoNoir</td><td><?php echo $photoNoir; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('noirs') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>