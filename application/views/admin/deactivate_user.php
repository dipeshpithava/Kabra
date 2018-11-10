<?php include 'html/header.php'; ?>
<?php include 'html/head.php' ?>
<?php include 'html/sidebar.php' ?>
<!-- begin #content -->
<div id="content" class="content">
  <h1 class="page-header"><?php echo lang('deactivate_heading');?><small><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></small></h1>

	<?php echo form_open("auth/deactivate/".$user->id);?>

	  <p>
	  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
	    <input type="radio" name="confirm" value="yes" checked="checked" />
	    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
	    <input type="radio" name="confirm" value="no" />
	  </p>

	  <?php echo form_hidden($csrf); ?>
	  <?php echo form_hidden(array('id'=>$user->id)); ?>

	  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

	<?php echo form_close();?>
</div>
<?php include 'html/footer.php'; ?>