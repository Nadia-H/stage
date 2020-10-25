<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Clients/add"> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>

</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Clients'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>

		<th><?php echo $this->Paginator->sort('Code'); ?></th>
		<th><?php echo $this->Paginator->sort('Nom'); ?></th>

		<th><?php echo $this->Paginator->sort('Prenom'); ?></th>

		<th><?php echo $this->Paginator->sort('Adresse'); ?></th>
		<th><?php echo $this->Paginator->sort('Téléphone'); ?></th>
        <th class="actions" align="center">Action</th>
        </tr></thead><tbody>
	<?php foreach ($clients as $client):  ?>
	<tr>
		<td  style="display:none"><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td ><?php echo h($client['Client']['code']); ?>&nbsp;</td>
		<td ><?php echo h($client['Client']['name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['tel']); ?>&nbsp;</td>

		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $client['Client']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $client['Client']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $client['Client']['id']),array('escape' => false), __('Veuillez vraiment supprimer cette enregistrement # %s?', $client['Client']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>

                                </div></div></div></div></div>



