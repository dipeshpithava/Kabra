<?php include 'html/header.php'; ?>
<?php include 'html/head.php' ?>
<?php include 'html/sidebar.php' ?>
<!-- begin #content -->
<div id="content" class="content">
  	<h1 class="page-header"><?php echo lang('forgot_password_heading');?><small><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></small></h1>
	<div id="infoMessage"><?php echo $message;?></div>
	<?php echo form_open("auth/forgot_password");?>
	    <p>
      		<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
	      	<?php echo form_input($identity);?>
	    </p>
	    <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>
	<?php echo form_close();?>
</div>
<?php include 'html/footer.php'; ?>