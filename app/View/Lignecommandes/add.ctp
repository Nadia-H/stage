<div class="lignecommandes form">
<?php echo $this->Form->create('Lignecommande'); ?>
	<fieldset>
		<legend><?php echo __('Add Lignecommande'); ?></legend>
	<?php
		echo $this->Form->input('produit_id');
		echo $this->Form->input('quantite');
		echo $this->Form->input('prix');
		echo $this->Form->input('total');
		echo $this->Form->input('commande_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lignecommandes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commandes'), array('controller' => 'commandes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commande'), array('controller' => 'commandes', 'action' => 'add')); ?> </li>
	</ul>
</div>
