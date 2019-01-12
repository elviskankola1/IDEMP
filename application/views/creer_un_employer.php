<h1>Formulaire pour creer un employer</h1>
<?php echo form_open_multipart('user_show/CreateEmployer');?>
    <?php echo $error;?>
    <input type="text" name="nom" value="<?php echo set_value('nom');?>">
    <?php echo form_error('nom');?><br>
    <input type="text" name="postnom" value="<?php echo set_value('postnom');?>">
    <?php echo form_error('postnom');?><br>
    <input type="text" name="prenom" value="<?php echo set_value('prenom');?>">
    <?php echo form_error('prenom');?><br>
    <input type="date" name="datenaissance" value="<?php echo set_value('datenaissance');?>">
    <?php echo form_error('datenaissance');?><br>
    <select name="genre">
        <option>F</option>
        <option>M</option>
    </select>
    <?php echo form_error('genre');?><br>
    <input type="email" name="email" value="<?php echo set_value('email');?>">
    <?php echo form_error('email');?><br>
    <input type="text" name="adressehome" value="<?php echo set_value('adressehome');?>">
    <?php echo form_error('adressehome');?><br>
    <input type="file" name="userfile">
    <input type="submit" value="send">

<?php echo form_close();?>