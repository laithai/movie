
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<title>///</title>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>


   <div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		
			<fieldset>
			<form action="<?php echo base_url('index.php/receiveForm/index');?>"method="post" enctype="multipart/form-data">
				<hr class="colorgraph">
				<div class="form-group">
			
                   <?php echo form_error('username'); ?>
				<input type="text" name="username" class="form-control input-lg" value="<?php echo set_value('username'); ?>" size="50" />
				</div>
				<div class="form-group">
					<?php echo form_error('password'); ?>
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="password"value="<?php echo set_value('password'); ?>" size="50">
				</div>
				<div class="form-group">
					<?php echo form_error('re-password'); ?>
                    <input type="re-password" name="re-password" id="re-password" class="form-control input-lg" placeholder="re-password"value="<?php echo set_value('re-password'); ?>" size="50">
				</div>
				<div class="form-group">
				<?php echo form_error('name'); ?>
                    <input type="text" name="name" id="name" class="form-control input-lg" placeholder="name"value="<?php echo set_value('name'); ?>" size="50">
				</div>
				<div class="form-group">
					<?php echo form_error('email'); ?>
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="email"value="<?php echo set_value('email'); ?>" size="50">
				</div>
			
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Submit">
					</div>
						
				
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>