<script language="JavaScript" type="text/JavaScript">
function flvFPW1(){
var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;
}
</script>
<?php
$reglement_add=  CakeSession::read('reglement_add'); 
if($reglement_add==1){
?>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Reglements/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<?php } ?>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
        <div class="col-md-12" >
                            <div class="panel panel-default"> 
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Recherche'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Reglement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php 
		
		echo $this->Form->input('Date_debut',array('label'=>'Date début','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
		echo $this->Form->input('num_recu',array('div'=>'form-group','N°recu','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
                //echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir','id'=>'BoncommandeClientId') );
		//echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		
	?></div>
  <div class="col-md-6"> 
       	<?php 
        echo $this->Form->input('Date_fin',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
	echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir','id'=>'BoncommandeClientId') );
         //echo $this->Form->input('ligneclient_id',array('div'=>'form-group','label'=>'Adresse','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );       
			
        ?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Afficher</button> 
                                                 <a href="<?php echo $this->webroot;?>reglements/index" class="btn btn-primary">Afficher Tout</a>
                  
                                                 <a  onClick="flvFPW1(wr+'Reglements/imprimerrecherche?client_id=<?php echo @$client_id;?>&num_recu=<?php echo @$num_recu;?>&Date_debut=<?php echo @$Date_debut;?>&Date_fin=<?php echo @$Date_fin;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>
<?php 
// debug($mar);

if(@$req_journals!=null){ 
?>
<button type="submit" class="btn btn-primary"  onClick="flvFPW1(wr+'bonlivraisons/imprimer?fam=<?php echo $fam ; ?>&mar=<?php echo $mar ; ?>&cli=<?php echo @$cli ; ?>&Date_d=<?php echo @$Date_d ; ?>&Date_f=<?php echo @$Date_f ; ?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;">Imprimer</button>
<?php 
}
?>

                                            </div>
                                        </div>
 
<?php echo $this->Form->end();?>





</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Règlements'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th style="display: none;"><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Client_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('remise'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Montant'); ?></th>
	        
		
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php $totalr=0;
        foreach ($reglements as $reglement): //debug($reglement); ?>
        <tr><?php  $remisel=0;
        foreach($reglement['Lignereglement'] as $i=>$li ){
            $remisel=$remisel+$li['remise'];
        }
        //$totalremise=$totalremise+$reglement['Reglement']['Remise'];
        $totalr=$totalr+$reglement['Reglement']['Remise']+$remisel;
        ?>
		<td style="display: none;"><?php echo h($reglement['Reglement']['id']); ?></td>
		<td >
			<?php echo $this->Html->link($reglement['Client']['Raison_Social'], array('controller' => 'clients', 'action' => 'view', $reglement['Client']['id'])); ?>
		</td>
		<td><?php echo  date("d/m/Y",strtotime(str_replace('-','/',($reglement['Reglement']['Date'])))); ?></td>
		<td><?php echo h(($reglement['Reglement']['Remise']+$remisel)); ?></td>
		<td><?php echo h($reglement['Reglement']['Montant']); ?></td>
		
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $reglement['Reglement']['id']),array('escape' => false)); ?>
			
			<?php  $reglement_delete=  CakeSession::read('reglement_delete'); 
                                if($reglement_delete==1){
                        echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $reglement['Reglement']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $reglement['Reglement']['id'])); 
                                }?>
                    <a onClick="flvFPW1(wr+'Reglements/imprimerview/'+<?php echo $reglement['Reglement']['id'];?>,'UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class='btn btn-xs ls-blue-btn'><i class='fa fa-print'></i></button></a>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


