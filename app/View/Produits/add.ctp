<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Produits/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>

</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Produit'); ?></h3>
                                </div>
                                <div class="panel-body">                 
<?php echo $this->Form->create('Produit'); ?>
<div class="col-md-6">
	<?php
		echo $this->Form->input('designation',array('type'=>'text','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control  ','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('categorie',array('type'=>'text','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control  ','required data-bv-notempty-message'=>'Champ Obligatoire') );
		
		/* echo $this->Form->input('designation');
		echo $this->Form->input('categorie');
		echo $this->Form->input('prix unitaire');
		echo $this->Form->input('quantite stocke'); */
	?>
	</div>
	<div class="col-md-6">
	<?php
	echo $this->Form->input('prix unitaire',array('type'=>'text','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control  ','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('quantite stocke',array('type'=>'text','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','required data-bv-notempty-message'=>'Champ Obligatoire') );
?>
</div>
<div class="form-group">



                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
										<?php echo $this->Form->end();?>


