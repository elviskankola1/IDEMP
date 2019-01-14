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
        <h2 style="margin-top:0px">Dossier List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('dossier/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('dossier/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('dossier'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>DiplomeetatDossier</th>
		<th>DiplomesupDossier</th>
		<th>LettredemandeDossier</th>
		<th>Annex1Dossier</th>
		<th>Annex2Dossier</th>
		<th>Annex3Dossier</th>
		<th>NomEmpDossier</th>
		<th>Action</th>
            </tr><?php
            foreach ($dossier_data as $dossier)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $dossier->diplomeetatDossier ?></td>
			<td><?php echo $dossier->diplomesupDossier ?></td>
			<td><?php echo $dossier->lettredemandeDossier ?></td>
			<td><?php echo $dossier->annex1Dossier ?></td>
			<td><?php echo $dossier->annex2Dossier ?></td>
			<td><?php echo $dossier->annex3Dossier ?></td>
			<td><?php echo $dossier->nomEmpDossier ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('dossier/read/'.$dossier->idDossier),'Read'); 
				echo ' | '; 
				echo anchor(site_url('dossier/update/'.$dossier->idDossier),'Update'); 
				echo ' | '; 
				echo anchor(site_url('dossier/delete/'.$dossier->idDossier),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('dossier/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>