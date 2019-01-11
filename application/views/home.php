<h1>bienvenue chez idemployer</h1>
<a href="<?php echo site_url('user_show/formulaire')?>"> creer un employer</a><br>
<a href="">liste des employer</a><br><br><br><br>
<?php if($employer):?>
<?php foreach($employer as $identity):?>
    <img src="<?php echo base_url($identity->photoEmp);?>" width="6%">
    <h5><?php echo $identity->nomEmp;?> <?php echo $identity->postnomEmp;?></h5>
    <h5><?php echo $identity->emailEmp;?></h5>
<?php endforeach?>
<?php endif?>