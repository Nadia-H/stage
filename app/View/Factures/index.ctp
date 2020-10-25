<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Factures/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>

</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Factures'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>

		<th><?php echo $this->Paginator->sort('Date'); ?></th>


		<th><?php echo $this->Paginator->sort('Client_id'); ?></th>

		<th><?php echo $this->Paginator->sort('Ttva'); ?></th>

		<th><?php echo $this->Paginator->sort('Ttcc'); ?></th>

        <th><?php echo $this->Paginator->sort('Total'); ?></th>



        <th class="actions" align="center">Action</th>
        </tr></thead><tbody>
	<?php foreach ($factures as $facture): ?>
	<tr>

		<td style="display:none"><?php echo h($facture['Facture']['id']); ?>&nbsp;</td>
		<td ><?php echo h(date('d/m/y',strtotime($facture['Facture']['date']))); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($facture['Client']['name'], array('controller' => 'clients', 'action' => 'view', $facture['Client']['id'])); ?>
		</td>
		<td ><?php echo h($facture['Facture']['ttva']); ?>&nbsp;</td>
		<td ><?php echo h($facture['Facture']['ttcc']); ?>&nbsp;</td>
        <td ><?php echo h($facture['Facture']['total']); ?>&nbsp;</td>

		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $facture['Facture']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $facture['Facture']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $facture['Facture']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $facture['Facture']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>

                                </div></div></div></div></div>


