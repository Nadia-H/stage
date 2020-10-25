<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Ligneligneproductions/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ligneligneproductions'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Ligneproduction_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Mouvementstock_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($ligneligneproductions as $ligneligneproduction): ?>
	<tr>
		<td><?php echo h($ligneligneproduction['Ligneligneproduction']['id']); ?>&nbsp;</td>
		<td><?php echo h($ligneligneproduction['Ligneligneproduction']['date']); ?>&nbsp;</td>
		<td><?php echo h($ligneligneproduction['Ligneligneproduction']['qte']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($ligneligneproduction['Ligneproduction']['id'], array('controller' => 'ligneproductions', 'action' => 'view', $ligneligneproduction['Ligneproduction']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($ligneligneproduction['Mouvementstock']['id'], array('controller' => 'mouvementstocks', 'action' => 'view', $ligneligneproduction['Mouvementstock']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $ligneligneproduction['Ligneligneproduction']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $ligneligneproduction['Ligneligneproduction']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $ligneligneproduction['Ligneligneproduction']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $ligneligneproduction['Ligneligneproduction']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


