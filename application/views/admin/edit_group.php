<?php include 'html/header.php'; ?>
<?php include 'html/head.php' ?>
<?php include 'html/sidebar.php' ?>
<!-- begin #content -->
<div id="content" class="content">
  	<h1 class="page-header"><?php echo lang('edit_group_heading');?><small><?php echo lang('edit_group_subheading');?></small></h1>
	<div id="infoMessage"><?php echo $message;?></div>
	<?php echo form_open(current_url());?>
	    <p>
            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
	    </p>
	    <p>
            <?php echo lang('edit_group_desc_label', 'description');?> <br />
            <?php echo form_input($group_description);?>
	    </p>
	    <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>
	<?php echo form_close();?>
</div>
<?php include 'html/footer.php'; ?>