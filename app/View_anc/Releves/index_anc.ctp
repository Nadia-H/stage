<!--<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Releves/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
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
        <?php echo $this->Form->create('Relefe',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm')); ?>

            <div class="col-md-6">                  
              	<?php 
		
		echo $this->Form->input('Date_debut',array('label'=>'Date début','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text') );
                
		echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir') );
		
	?></div>
  <div class="col-md-6"> 
       	<?php 
        echo $this->Form->input('Date_fin',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text') );
	echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir','id'=>'ClientReleve') );			
        ?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3" >
                                                <button  id="breleve" type="submit" class="btn btn-primary" >Afficher</button> 
       <a  onClick="flvFPW1(wr+'Releves/imprimerrecherche?Date_debut=<?php echo @$Date_debut;?>&marque_id=<?php echo @$marque_id;?>&Date_fin=<?php echo @$Date_fin;?>&client_id=<?php echo @$client_id;?>&remisec='+document.getElementById('remisec').value+'&typpp='+document.getElementById('typpp').value+'&netapayer='+document.getElementById('netapayer').value,'UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>
          

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
                                    <h3 class="panel-title"><?php echo __('Releves'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="">
                      <thead>
	<tr>
	         
		<td width="12%" align="center"><?php echo ('Type'); ?></td>
	         
		<td width="12%" align="center"><?php echo ('Date'); ?></td>
	         
<!--		<td><?php echo ('Client'); ?></td>-->
	         
		<td width="12%" align="center"><?php echo ('Contact'); ?></td>
	        <td width="12%" align="center"><?php echo ('Mode'); ?></td>  
		<td width="12%" align="center"><?php echo ('Montant'); ?></td>
	        <td width="12%" align="center"><?php echo ('Acompte'); ?></td> 
		<td width="16%" align="center"><?php echo ('Remise'); ?></td>
                
                <td width="12%"><?php echo ('Solde'); ?></td>
        </tr></thead><tbody>
	<?php $solde=0; $totremise=0;$totBL=0; $totREG=0; $remisereg=0;
        if(!empty($releves)){
        foreach (@$releves as $relefe):
            $montant="";$acompte="";
            if(@$relefe['Relefe']['Type']=='BL'){
                $solde=$solde+$relefe['Relefe']['Montant']-$relefe['Relefe']['Remisereg'];
                $totBL=$totBL+$relefe['Relefe']['Montant'];
                $cadreB='';
                $montant=$relefe['Relefe']['Montant'];
            }
            if(@$relefe['Relefe']['Type']=='REG'){
                $solde=$solde-$relefe['Relefe']['Montant']-$relefe['Relefe']['Remise'];
                $totREG=$totREG+$relefe['Relefe']['Montant'];
                $cadreB='style="background-color:#B9CDCA;"';
                $acompte=$relefe['Relefe']['Montant'];
            }
            $totremise=$totremise+$relefe['Relefe']['Remise'];
            
            
            
            $solde=sprintf('%.3f',$solde);
            $totBL=sprintf('%.3f',$totBL);
            $totREG=sprintf('%.3f',$totREG);
            $totremise=sprintf('%.3f',$totremise);
            ?>
	<tr>
                <td width="12%" <?php echo $cadreB ?>align="center"><?php echo h($relefe['Relefe']['Type']) ;echo h($relefe['Relefe']['Numero']); ?></td>
		<td width="12%" <?php echo $cadreB ?> align="center"><?php 
                $Date=$relefe['Relefe']['Date'];
                $Date=date('d/m/Y', strtotime(str_replace('-', '/',$Date)));
                echo $Date;
                ?></td>
<!--		<td><?php echo h($relefe['Relefe']['Client']); ?></td>-->
		<td width="12%" <?php echo $cadreB ?> align="center"><?php echo h($relefe['Relefe']['Contact']); ?></td>
                <td width="12%" <?php echo $cadreB ?> align="center"><?php echo h($relefe['Relefe']['mode']); ?></td>
		<td width="12%" <?php echo $cadreB ?>  align="right"><?php echo h($montant); ?></td>
                <td width="12%" <?php echo $cadreB ?>  align="right"><?php echo h($acompte); ?></td>
		<td width="16%" <?php echo $cadreB ?> align="right"><?php echo h($relefe['Relefe']['Remise']); ?></td>
                <td width="12%" <?php echo $cadreB ?>align="right"><?php echo h($solde); ?></td>
		
	</tr>
        
<?php endforeach; 
        }?>
        
        <tr>     
            <td colspan="4" align="right">Total</td>
            <td  align="right"><?php echo h($totBL); ?></td>
            <td  align="right"><?php echo h($totREG); ?></td>
            <td  align="right"><?php echo h($totremise); ?></td>
            <td  align="right"><input   id="tsolde" value="<?php echo h($solde); ?>" class="form-control" type="hidden"><?php echo h($solde); ?>  </td>
        </tr>
        <tr>
            
            <td colspan="7" align="right">
                <table width='100%'>
                    <tr>
                        <td align="right"><label class="radio-inline" style="width: 100%! important">
                            <input type="radio" name="typeremise" id="typeremiseD"  value="d" class="tremise">
                                remise en dinar
                            </label></td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label class="radio-inline" style="width: 100%! important">
                                <input type="radio" name="typeremise" id="typeremiseP" value="p" class="tremise">
                                Remise en pourcentage
                            </label>
                        </td>
                    </tr>
                </table>
            </td>
             <td colspan="1">
                <input type="text" id="remisec" class="form-control solde"  value="0.000">
                <input   id="remise" class="form-control solde"  value="0.000" type="hidden">
            </td>
        </tr>
        <tr>
            <td colspan="7" align="right"> Net à payer</td>
            <td colspan="1">
                <input type="text"  id="netapayer" readonly="readonly" class="form-control solde"  value="0.000">
            </td>
        </tr>
<!--        <tr>     
            <td colspan="7" align="right">Total Remise</td>
            <td  align="right"><?php echo h($totremise); ?></td>
        </tr>
        <tr>     
            <td colspan="7" align="right">Total Reglement</td>
            <td  align="right"><?php echo h($totREG); ?></td>
        </tr>

        <tr>     
            <td colspan="7" align="right">Total Solde</td>
            <td  align="right"><?php echo h($solde); ?></td>
        </tr>-->
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


