<div class="ventes form">
<?php echo $this->Form->create('Vente'); ?>
	<fieldset>
		<legend><?php echo __('Add Vente'); ?></legend>
	<?php
		echo $this->Form->input('Ref_vente');
		echo $this->Form->input('Prix_Total');
		echo $this->Form->input('Nom_Client');
		echo $this->Form->input('Date_effect');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ventes'), array('action' => 'index')); ?></li>
	</ul>
</div>
