<!--<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Caissements/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>-->

<script language="JavaScript" type="text/JavaScript">
function flvFPW1(){
var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;
}
</script>

<br><input type="hidden" id="page" value="1"/>
<div class="col-md-12" >
                            <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Recherche'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Caissement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php 
		
		echo $this->Form->input('Date_debut',array('label'=>'Date début','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
                		
	?></div>
  <div class="col-md-6"> 
       	<?php 
        echo $this->Form->input('Date_fin',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
        ?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3" >
                                                <button  id="breleve" type="submit" class="btn btn-primary" >Afficher</button> 
       <a  onClick="flvFPW1(wr+'Caissements/imprimerrecherche?Date_debut=<?php echo @$Date_debut;?>&Date_fin=<?php echo @$Date_fin;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>
          

                                            </div>
                                        </div>
 
<?php echo $this->Form->end();?>
        </div>
    </div>
</div>


<div class="row">
     <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Etat de Caissement'); ?></h3>
                                </div>
                                <div class="panel-body">
                        
                                    
                                    
                                    <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Encaissement'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="">
                      <thead>
	<tr>
	         
		<th><?php echo ('Type'); ?></th>
	         
		<th><?php echo ('Date'); ?></th>
	            
		<th><?php echo ('Montant'); ?></th>
	         
		
            </tr></thead><tbody>
	<?php $solde=0; $totREG=0; $totALM=0;$totEnC=0;
        if(!empty($caissements)){
        foreach (@$caissements as $caissement): 
            if(@$caissement['Caissement']['Type']=='REG'){
                $totREG=$totREG+$caissement['Caissement']['Montant'];
                $cadreB='';
            }
            if(@$caissement['Caissement']['Type']=='Alimentation'){
                $totALM=$totALM+$caissement['Caissement']['Montant'];
                $cadreB='style="background-color:#A6C8C4;"';
            }
            $totEnC=$totREG+$totALM;
            
            
            $totREG=sprintf('%.3f',$totREG);
            $totALM=sprintf('%.3f',$totALM);
            $totEnC=sprintf('%.3f',$totEnC);
            
            ?>
	<tr>
                <td <?php echo $cadreB ?>align="center"><?php echo h($caissement['Caissement']['Type']); echo "  " ;echo h($caissement['Caissement']['Client']); ?></td>
		<td <?php echo $cadreB ?> align="center"><?php 
                $Date=$caissement['Caissement']['Date'];
                $Date=date('d/m/Y', strtotime(str_replace('-', '/',$Date)));
                echo $Date;
                ?></td>
		<td <?php echo $cadreB ?>  align="right"><?php echo h($caissement['Caissement']['Montant']); ?></td>
				
	</tr>
        
<?php endforeach; 
        }?>
        
        <tr>     
            <td colspan="2" align="right">Total Reglement</td>
            <td  align="right"><?php echo h($totREG); ?></td>   
        </tr>
        <tr>     
            <td colspan="2" align="right">Total Alimentation</td>
            <td  align="right"><?php echo h($totALM); ?></td>
        </tr>
        <tr>     
            <td colspan="2" align="right">Total Encaissement</td>
            <td  align="right"><?php echo h($totEnC); ?></td>
        </tr>

        
                          </tbody>
	</table>
	
                                </div></div></div></div>
<div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Décaissement'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="">
                      <thead>
	<tr>
	         
		<th><?php echo ('Type'); ?></th>
	         
		<th><?php echo ('Date'); ?></th>
	            
		<th><?php echo ('Montant'); ?></th>
	         
		
            </tr></thead><tbody>
	<?php $solde=0; $totDec=0; 
        if(!empty($caissements)){
        foreach (@$decaissements as $decaissement): 
            if(@$decaissement['Decaissement']['Type']=='SRT'){
                $totDec=$totDec+$decaissement['Decaissement']['Montant'];
                $cadreB='';
            }

            $totDec=sprintf('%.3f',$totDec);
            ?>
	<tr>
                <td <?php echo $cadreB ?>align="center"><?php echo h($decaissement['Decaissement']['Type']) ; ?></td>
		<td <?php echo $cadreB ?> align="center"><?php 
                $Date=$decaissement['Decaissement']['Date'];
                $Date=date('d/m/Y', strtotime(str_replace('-', '/',$Date)));
                echo $Date;
                ?></td>
		<td <?php echo $cadreB ?>  align="right"><?php echo h($decaissement['Decaissement']['Montant']); ?></td>
				
	</tr>
        
<?php endforeach; 
        }?>
    
        <tr>     
            <td colspan="2" align="right">Total Décaissement</td>
            <td  align="right"><?php echo h($totDec); ?></td>
        </tr>

        
                          </tbody>
	</table>
	
                                </div></div></div></div>
                                    </div></div></div></div>
</div>	

