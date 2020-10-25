<div class="commandes view">
<h2><?php echo __('Commande'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reference'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['reference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantite Produit'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['quantite_produit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prix Total'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['prix_total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom Client'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['nom_client']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Creation'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['date_creation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modifier'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['date_modifier']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Commande'), array('action' => 'edit', $commande['Commande']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Commande'), array('action' => 'delete', $commande['Commande']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $commande['Commande']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Commandes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commande'), array('action' => 'add')); ?> </li>
	</ul>
</div>
