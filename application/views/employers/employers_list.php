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
        <h2 style="margin-top:0px">Employers List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('employers/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('employers/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('employers'); ?>" class="btn btn-default">Reset</a>
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
		<th>NomEmp</th>
		<th>PostnomEmp</th>
		<th>PrenomEmp</th>
		<th>DatenaissanceEmp</th>
		<th>GenreEmp</th>
		<th>AdressehomeEmp</th>
		<th>EmailEmp</th>
		<th>PhotoEmp</th>
		<th>IdDossier</th>
		<th>DatefonctionEmp</th>
		<th>MatriculeEmp</th>
		<th>Action</th>
            </tr><?php
            foreach ($employers_data as $employers)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $employers->nomEmp ?></td>
			<td><?php echo $employers->postnomEmp ?></td>
			<td><?php echo $employers->prenomEmp ?></td>
			<td><?php echo $employers->datenaissanceEmp ?></td>
			<td><?php echo $employers->genreEmp ?></td>
			<td><?php echo $employers->adressehomeEmp ?></td>
			<td><?php echo $employers->emailEmp ?></td>
			<td><?php echo $employers->photoEmp ?></td>
			<td><?php echo $employers->idDossier ?></td>
			<td><?php echo $employers->datefonctionEmp ?></td>
			<td><?php echo $employers->matriculeEmp ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('employers/read/'.$employers->idEmp),'Read'); 
				echo ' | '; 
				echo anchor(site_url('employers/update/'.$employers->idEmp),'Update'); 
				echo ' | '; 
				echo anchor(site_url('employers/delete/'.$employers->idEmp),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
		<?php echo anchor(site_url('employers/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>