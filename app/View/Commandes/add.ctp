<div class="commandes form">
<?php echo $this->Form->create('Commande'); ?>
	<fieldset>
		<legend><?php echo __('Add Commande'); ?></legend>
	<?php
		echo $this->Form->input('reference');
		echo $this->Form->input('quantite_produit');
		echo $this->Form->input('prix_total');
		echo $this->Form->input('nom_client');
		echo $this->Form->input('date_creation');
		echo $this->Form->input('date_modifier');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Commandes'), array('action' => 'index')); ?></li>
	</ul>
</div>
