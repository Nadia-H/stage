
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>produits/add"> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>

</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Produits'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>

		<th><?php echo $this->Paginator->sort('Produit_id'); ?></th>


		<th><?php echo $this->Paginator->sort('categorie'); ?></th>

		<th><?php echo $this->Paginator->sort('prix unitaire'); ?></th>

		<th><?php echo $this->Paginator->sort('quantite stocke'); ?></th>
        <th class="actions" align="center">Action</th>
        </tr></thead><tbody>
	<?php foreach ($produits as $produit):  ?>
	<tr>
		<td style="display:none"><?php echo h($produit['Produit']['id']); ?>&nbsp;</td>
		<td ><?php echo h($produit['Produit']['designation']); ?>&nbsp;</td>
		<td><?php echo h($produit['Produit']['categorie']); ?>&nbsp;</td>
		<td><?php echo h($produit['Produit']['prix unitaire']); ?>&nbsp;</td>
		<td><?php echo h($produit['Produit']['quantite stocke']); ?>&nbsp;</td>

		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $produit['Produit']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $produit['Produit']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $produit['Produit']['id']),array('escape' => false), __('Veuillez vraiment supprimer cette enregistrement # %s?', $produit['Produit']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>

                                </div></div></div></div></div>



