<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Factures/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>

</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Facture'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Facture',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">
              	<?php
		echo $this->Form->input('date',array('type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly listeprix','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('total',array('type'=>'text','div'=>'form-group','id'=>'total','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6">
	   <?php echo $this->Form->input('ttva',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('ttcc',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?>
  </div>
									<div class="col-md-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title">Ligne de facture</h3>
												<a class="btn btn-danger ajouterligne2"
												   table='table' index='index' tr='type'  style="
                                    float: right;
                                    position: relative;
                                    top: -25px;
                                "> <i class="fa fa-plus-circle"  ></i>Ajouter ligne</a>
												<input type="hidden" value="0" class="index" id="index">
											</div>
											<div class="panel-body">
												<!--Table Wrapper Start-->
												<div class="table-responsive ls-table" id="deleteLabel">
													<table id="table" class="table nolabel" >
														<thead>
														<tr >
															<td   align="center" width="39%">Article</td>
															<td   align="center" width="20%">Qté</td>
															<td   align="center" width="20%">Prix</td>
															<td   align="center" width="20%">Total</td>
															<td   align="center" width="1%">Supprimer</td>
														</tr>
														</thead>
														<tbody>
														<tr class='tr'  style="display: none " >
															<td align="center" > <?php echo $this->Form->input('article_id',array('label' => false, 'name' => 'article_id','table'=>'lignefacturefournisseurs','champ'=>'article_id','index'=>'index','div'=>'form-group','between'=>'<div class="col-sm-12 adrcli selectized">','after'=>'</div>','class'=>'form-control selectized prixz','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></td>
															<td align="center" > <?php echo $this->Form->input('qte',array('label'=>false,'id'=>'qte','name' => 'qte','table'=>'lignefacturefournisseurs','champ'=>'qte','index'=>'index','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
															<td align="center" > <?php echo $this->Form->input('prix',array('label'=>false,'id'=>'prix','name' => 'qte','table'=>'lignefacturefournisseurs','champ'=>'prix','index'=>'index','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
															<td align="center" > <?php echo $this->Form->input('t',array('label'=>false,'id'=>'t','name' => 't','table'=>'lignefacturefournisseurs','champ'=>'t','index'=>'index','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur') ); ?></td>
															<td align="center">
																<i index="0"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></i>
																<?php echo $this->Form->input('sup',array('name'=>'','id'=>'sup','champ'=>'sup','table'=>'lignefacturefournisseurs','index'=>'index','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'') );?>
															</td>
														</tr>
														<tr>
															<td align="center"> <?php echo $this->Form->input('article_id',array('label' => false,'id' => 'calculefacfournisseur_id0', 'name' => 'data[lignefacturefournisseurs][0][article_id]','table'=>'lignefacturefournisseurs','champ'=>'article_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-12 adrcli">','after'=>'</div>','class'=>'form-control select prixz calculefacfournisseur ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></td>
															<td align="center"> <?php echo $this->Form->input('qte',array('id' => 'qte0','label'=>false, 'name' => 'data[lignefacturefournisseurs][0][qte]','table'=>'lignefacturefournisseurs','champ'=>'qte','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
															<td align="center"> <?php echo $this->Form->input('prix',array('id' => 'prix0','label'=>false, 'name' => 'data[lignefacturefournisseurs][0][prix]','table'=>'lignefacturefournisseurs','champ'=>'prix','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
															<td align="center"> <?php echo $this->Form->input('t',array('id' => 't0','label'=>false, 'name' => 'data[lignefacturefournisseurs][0][t]','table'=>'lignefacturefournisseurs','champ'=>'t','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
															<td align="center"><i index="0"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></i>
																<?php echo $this->Form->input('sup',array('name'=>'data[lignefacturefournisseurs][0][sup]','id'=>'sup0','type'=>'checkbox','champ'=>'sup','table'=>'lignefacturefournisseurs','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-12">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );?>
															</td>
														<tfoot>
														</tfoot>



														</tbody>
													</table>
												</div>
												<!--Table Wrapper Finish-->
											</div>
										</div>
									</div>

									<div class="form-group">



                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
										<?php echo $this->Form->end();?>
										</div>
																	</div>
																</div>
										</div>


