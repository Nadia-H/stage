<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Detailfactures/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Detailfactures'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Facture_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Article_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Action'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($detailfactures as $detailfacture): ?>
	<tr>
		<td style="display:none"><?php echo h($detailfacture['Detailfacture']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($detailfacture['Facture']['id'], array('controller' => 'factures', 'action' => 'view', $detailfacture['Facture']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link(($detailfacture['Article']['code'].' :'.$detailfacture['Article']['design']), array('controller' => 'articles', 'action' => 'view', $detailfacture['Article']['id'])); ?>
		</td>
		<td ><?php echo h($detailfacture['Detailfacture']['qte']); ?>&nbsp;</td>
		<td ><?php echo h($detailfacture['Detailfacture']['prix']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $detailfacture['Detailfacture']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $detailfacture['Detailfacture']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $detailfacture['Detailfacture']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $detailfacture['Detailfacture']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


