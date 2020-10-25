<div class="ventes view">
<h2><?php echo __('Vente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vente['Vente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref Vente'); ?></dt>
		<dd>
			<?php echo h($vente['Vente']['Ref_vente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prix Total'); ?></dt>
		<dd>
			<?php echo h($vente['Vente']['Prix_Total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom Client'); ?></dt>
		<dd>
			<?php echo h($vente['Vente']['Nom_Client']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Effect'); ?></dt>
		<dd>
			<?php echo h($vente['Vente']['Date_effect']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vente'), array('action' => 'edit', $vente['Vente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vente'), array('action' => 'delete', $vente['Vente']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $vente['Vente']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
