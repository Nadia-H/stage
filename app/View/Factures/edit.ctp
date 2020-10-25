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
                                    <h3 class="panel-title"><?php echo __('Modification Facture'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Facture',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">
              	<?php
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date',array('type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('total',array('type'=>'text','div'=>'form-group','id'=>'total','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></div><div class="col-md-6"><?php
		echo $this->Form->input('ttva',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('ttcc',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
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
															<?php echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','champ'=>'id','index'=>'index','name' => 'id','table'=>'lignefacturefournisseurs'));?>
															<td align="center" > <?php echo $this->Form->input('article_id',array('label' => false, 'name' => 'article_id','table'=>'lignefacturefournisseurs','champ'=>'article_id','index'=>'index','div'=>'form-group','between'=>'<div class="col-sm-12 adrcli selectized">','after'=>'</div>','class'=>'form-control selectized prixz','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></td>
															<td align="center" > <?php echo $this->Form->input('qte',array('label'=>false,'id'=>'qte','name' => 'qte','table'=>'lignefacturefournisseurs','champ'=>'qte','index'=>'index','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
															<td align="center" > <?php echo $this->Form->input('prix',array('label'=>false,'id'=>'prix','name' => 'qte','table'=>'lignefacturefournisseurs','champ'=>'prix','index'=>'index','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
															<td align="center" > <?php echo $this->Form->input('t',array('label'=>false,'id'=>'t','name' => 't','table'=>'lignefacturefournisseurs','champ'=>'t','index'=>'index','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur') ); ?></td>
															<td align="center">
																<i index="0"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></i>
																<?php echo $this->Form->input('sup',array('name'=>'sup','id'=>'sup','champ'=>'sup','table'=>'lignefacturefournisseurs','index'=>'index','div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'') );?>
															</td>
														</tr>
														<?php echo $this->Form->create('Detailfacture',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

														<?php
														foreach ($this->request->data['Detailfacture'] as $i=>$value)  {
															//echo $value['article_id'];
															//echo h($value['Detailfacture']['article_id']);
															//debug($value['id']);
                                                            $total=$value['qte']*$value['prix'];
															?>
														<tr>
														    <?php echo $this->Form->input('id',array('value'=>$value['id'],'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','champ'=>'id','index'=>$i,'name' => 'data[lignefacturefournisseurs]['.$i.'][id]','table'=>'lignefacturefournisseurs') );?>
															<td align="center"> <?php echo $this->Form->input('article_id',array('value'=>$value['article_id'],'label' => false,'id' => 'calculefacfournisseur_id'.$i, 'name' => 'data[lignefacturefournisseurs]['.$i.'][article_id]','table'=>'lignefacturefournisseurs','champ'=>'article_id','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-12 adrcli">','after'=>'</div>','class'=>'form-control select prixz calculefacfournisseur ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></td>
															<td align="center"> <?php echo $this->Form->input('qte',array('value'=>$value['qte'],'id' => 'qte'.$i,'label'=>false, 'name' => 'data[lignefacturefournisseurs]['.$i.'][qte]','table'=>'lignefacturefournisseurs','champ'=>'qte','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
															<td align="center"> <?php echo $this->Form->input('prix',array('value'=>$value['prix'],'id' => 'prix'.$i,'label'=>false,'name' => 'data[lignefacturefournisseurs]['.$i.'][prix]','table'=>'lignefacturefournisseurs','champ'=>'prix','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
															<td align="center"> <?php echo $this->Form->input('t',array('value'=>$total,'id' => 't'.$i,'label'=>false, 'name' => 'data[lignefacturefournisseurs]['.$i.'][t]','table'=>'lignefacturefournisseurs','champ'=>'t','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-12">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
															<td align="center"><i index="<?php echo $i;?>"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></i><?php echo $this->Form->input('sup',array('name'=>'data[lignefacturefournisseurs]['.$i.'][sup]','id'=>'sup'.$i,'champ'=>'sup','table'=>'lignefacturefournisseurs',
																	'index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-12">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );?>
															</td>
														</tr>
														<?php }?>
														<tfoot>
														</tfoot>



														</tbody>
													</table>
												</div>
												<!--Table Wrapper Finish-->
											</div>
										</div>
									</div>
									<input type="hidden" value="<?php echo $i;?>" class="index" id="index">


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

