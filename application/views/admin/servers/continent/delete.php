
<div class="warper container-fluid">
	<div class="page-header">
		DELETE CONTINENT
	</div>
	<div class="panel panel-danger">
		<div class="panel-heading">
		</div>
		<div class="panel-body">
			<p><?php echo sprintf('Anda yakin ingin meghapus Bemua '. $continent->name);?></p>

<?php echo form_open(site_url('admin/servers/delete_continent/'.$continent->id));?>

	<p>Meghapus continent menyebabkan lokasi juga terhapus.</p>
  <p>
  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
    <input type="radio" name="confirm" value="yes" checked="checked" />
    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
    <input type="radio" name="confirm" value="no" />
  </p>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$continent->id)); ?>

  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-danger"');?></p>

<?php echo form_close();?>
		</div>
	</div>
</div>

