<div class="commandes index">
	<h2><?php echo __('Commandes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('reference'); ?></th>
			<th><?php echo $this->Paginator->sort('quantite_Commande'); ?></th>
			<th><?php echo $this->Paginator->sort('prix_total'); ?></th>
			<th><?php echo $this->Paginator->sort('nom_Commande'); ?></th>
			<th><?php echo $this->Paginator->sort('date_creation'); ?></th>
			<th><?php echo $this->Paginator->sort('date_modifier'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($commandes as $commande): ?>
	<tr>
		<td><?php echo h($commande['Commande']['id']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $commande['Commande']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $commande['Commande']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $commande['Commande']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $commande['Commande']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Commande'), array('action' => 'add')); ?></li>
	</ul>
</div>



<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Commandes/add"> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>

</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Commandes'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>

		<th><?php echo $this->Paginator->sort('reference'); ?></th>

		<th><?php echo $this->Paginator->sort('Client'); ?></th>
		<th><?php echo $this->Paginator->sort('prix_total'); ?></th>
		<th><?php echo $this->Paginator->sort('date_creation'); ?></th>
		<th><?php echo $this->Paginator->sort('date_modifier'); ?></th>
		
        <th class="actions" align="center">Action</th>
        </tr></thead><tbody>
	<?php foreach ($commandes as $commande):  ?>
	<tr>
		<td style="display:none"><?php echo h($commande['Commande']['id']); ?>&nbsp;</td>
		<td><?php echo h($commande['Commande']['reference']); ?>&nbsp;</td>
		<td><?php echo h($commande['Commande']['client_id']); ?>&nbsp;</td>
		<td><?php echo h($commande['Commande']['prix_total']); ?>&nbsp;</td>
		<td><?php echo h($commande['Commande']['date_creation']); ?>&nbsp;</td>
		<td><?php echo h($commande['Commande']['date_modifier']); ?>&nbsp;</td>

		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $commande['Commande']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $commande['Commande']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $commande['Commande']['id']),array('escape' => false), __('Veuillez vraiment supprimer cette enregistrement # %s?', $Commande['Commande']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>

                                </div></div></div></div></div>



