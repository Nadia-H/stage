<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bonsorties/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Bonsorties'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Demande_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Numero'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Utilisateur_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Lot_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($bonsorties as $bonsorty): ?>
	<tr>
		<td><?php echo h($bonsorty['Bonsorty']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($bonsorty['Demande']['id'], array('controller' => 'demandes', 'action' => 'view', $bonsorty['Demande']['id'])); ?>
		</td>
		<td><?php echo h($bonsorty['Bonsorty']['date']); ?>&nbsp;</td>
		<td><?php echo h($bonsorty['Bonsorty']['numero']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($bonsorty['Utilisateur']['id'], array('controller' => 'utilisateurs', 'action' => 'view', $bonsorty['Utilisateur']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($bonsorty['Lot']['id'], array('controller' => 'lots', 'action' => 'view', $bonsorty['Lot']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $bonsorty['Bonsorty']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $bonsorty['Bonsorty']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $bonsorty['Bonsorty']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $bonsorty['Bonsorty']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


