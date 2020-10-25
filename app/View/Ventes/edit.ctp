<div class="ventes form">
<?php echo $this->Form->create('Vente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vente'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vente.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Vente.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Ventes'), array('action' => 'index')); ?></li>
	</ul>
</div>
