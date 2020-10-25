<div class="lignecommandes view">
<h2><?php echo __('Lignecommande'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lignecommande['Lignecommande']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lignecommande['Produit']['id'], array('controller' => 'produits', 'action' => 'view', $lignecommande['Produit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantite'); ?></dt>
		<dd>
			<?php echo h($lignecommande['Lignecommande']['quantite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prix'); ?></dt>
		<dd>
			<?php echo h($lignecommande['Lignecommande']['prix']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($lignecommande['Lignecommande']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commande'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lignecommande['Commande']['id'], array('controller' => 'commandes', 'action' => 'view', $lignecommande['Commande']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lignecommande'), array('action' => 'edit', $lignecommande['Lignecommande']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lignecommande'), array('action' => 'delete', $lignecommande['Lignecommande']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $lignecommande['Lignecommande']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Lignecommandes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lignecommande'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commandes'), array('controller' => 'commandes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commande'), array('controller' => 'commandes', 'action' => 'add')); ?> </li>
	</ul>
</div>
