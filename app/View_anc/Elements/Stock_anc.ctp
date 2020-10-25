<section id="left-navigation">
<!--Left navigation user details start-->
<div class="user-image">
     <img src="<?php echo $this->webroot;?>assets/images/petit-logo.png" alt=""/>
<!--    <div class="user-online-status"><span class="user-status is-online  "></span> </div>-->
</div>
<?php 
$vente=  CakeSession::read('vente');
$achat=  CakeSession::read('achat');
$personnel=  CakeSession::read('personnel');
$stock=  CakeSession::read('stock');
$production=  CakeSession::read('production');
?>
<ul class="social-icon">
    <?php  if($achat=='ac'){?>
    <li><a href="<?php echo $this->webroot;?>Matierepremieres/index"><i ><img src="<?php echo $this->webroot;?>assets/images/achat.png" alt="" width="20px"/></i></a></li>
    <?php } ?>  
    <?php  if($vente=='ven'){?>
    <li><a href="<?php echo $this->webroot;?>Clients/index"><i ><img src="<?php echo $this->webroot;?>assets/images/vente.png" alt="" width="20px"/></i></a></li>
    <?php } ?>
    <?php  if($stock=='st'){?>
    <li><a href="<?php echo $this->webroot;?>Articles/index"><i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="20px"/></i></a></li>
    <?php } ?>
    <?php  if($production=='prd'){?>
    <li><a href="<?php echo $this->webroot;?>Productions/index"><i > <img src="<?php echo $this->webroot;?>assets/images/production.png" alt="" width="20px"/></i></a></li>
    <?php } ?>
    <?php  if($personnel=='per'){?>
    <li><a href="<?php echo $this->webroot;?>Personnels/index"><i > <img src="<?php echo $this->webroot;?>assets/images/personnel.png" alt="" width="20px"/></i></a></li>
    <?php } ?>
</ul>
<!--Left navigation user details end-->

<!--Phone Navigation Menu icon start-->
<div class="phone-nav-box visible-xs">
    <a class="phone-logo" href="index.html" title="">
        <h1>Fickle</h1>
    </a>
    <a class="phone-nav-control" href="javascript:void(0)">
        <span class="fa fa-bars"></span>
    </a>
    <div class="clearfix"></div>
</div>
<!--Phone Navigation Menu icon start-->

<!--Left navigation start-->
<ul class="mainNav">
<!--<li class="active">
    <a class="active" href="index.html">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
</li>-->

<li>
    <a href="#">
        <i ><img src="<?php echo $this->webroot;?>assets/images/article.png" alt="" width="15px"/></i> <span>Article</span> <span class="badge badge-red">7</span>
    </a>
    <ul>
         <?php
        $articleS_index=  CakeSession::read('articleS_index'); 
        if($articleS_index==1){
        ?>
        <li><a href="<?php echo $this->webroot;?>Articles/index">Article</a></li>
        <?php }?>
        <?php
        $articleS_index=  CakeSession::read('articleS_index'); 
        if($articleS_index==1){
        ?>
        <li><a href="<?php echo $this->webroot;?>Tailles/index">Taille</a></li>
        <?php }?>
        <?php
        $articleS_index=  CakeSession::read('articleS_index'); 
        if($articleS_index==1){
        ?>
         <li><a href="<?php echo $this->webroot;?>Marques/index">Marque</a></li>
         <?php }?>
        <?php
        $articleS_index=  CakeSession::read('articleS_index'); 
        if($articleS_index==1){
        ?>
         <li><a href="<?php echo $this->webroot;?>Familles/index">Famille</a></li>
         <?php }?>
        <?php
        $articleS_index=  CakeSession::read('articleS_index'); 
        if($articleS_index==1){
        ?>
          <li><a href="<?php echo $this->webroot;?>Modeles/index">Modèle</a></li>
          <?php }?>
        <?php
        $articleS_index=  CakeSession::read('articleS_index'); 
        if($articleS_index==1){
        ?>
           <li><a href="<?php echo $this->webroot;?>Couleurs/index">Couleur</a></li>
           <?php }?>
        <?php
        $articleS_index=  CakeSession::read('articleS_index'); 
        if($articleS_index==1){
        ?>
            <!--<li><a href="<?php echo $this->webroot;?>References/index">Référence</a></li>-->
             <li><a href="<?php echo $this->webroot;?>Types/index">Type</a></li>
             <?php }?>
    </ul>
</li>
 

<li>
    <a href="#">
        <i ><img src="<?php echo $this->webroot;?>assets/images/depot.png" alt="" width="15px"/></i> <span>Dépôt</span><span class="badge badge-red">4</span>
    </a>
    <ul>
        <?php
        $depotS_index=  CakeSession::read('depotS_index'); 
        if($depotS_index==1){
        ?>
        <li>
            <a href="<?php echo $this->webroot;?>Depots/index">Dépôt </a>
        </li>
        <?php }?>
        <?php
        $inventaireS_index=  CakeSession::read('inventaireS_index'); 
        if($inventaireS_index==1){
        ?>
        <li>
            <a href="<?php echo $this->webroot;?>Inventaires/index">Inventaire</a>
        </li>
         <?php }?>
        <?php
        $receptionS_index=  CakeSession::read('receptionS_index'); 
        if($receptionS_index==1){
        ?>
        <li>
            <a href="<?php echo $this->webroot;?>ligneproductions/index">Réception des articles</a>
        </li>
        <?php }?>
      <!--  <li>
            <a href="<?php echo $this->webroot;?>Mouvementstocks/index"">Mouvement stock </a>
        </li>-->
       
    </ul>
</li>

<!--<li>
    <a href="#">
        <i class="fa fa-glass"></i>
        <span>Form Staffs</span>
    </a>
    <ul>
        <li><a href="sample-form.html">Sample Form</a></li>
        <li><a href="form-wizard.html">Form Wizards</a></li>
        <li><a href="form-validation.html">Form Validation</a></li>
        <li><a href="editor.html">Editor</a></li>
    </ul>
</li>-->
<!--<li>
    <a href="#">
        <i class="fa fa-flag"></i>
        <span>Ui Elements</span>
        <span class="badge badge-red">New</span>
    </a>
    <ul>
        <li><a href="button-switch.html">Button & Switch</a></li>
        <li><a href="checkbox-radio.html">Checkbox & Radio</a></li>
        <li><a href="select-tag.html">Select & Tag</a></li>
        <li><a href="knob-slider.html">Knob & Slider</a></li>
        <li><a href="picker-tool.html">Picker</a></li>
        <li><a href="drag-drop.html">Drag & Drop</a></li>
        <li><a href="ui-elements.html">Elements</a></li>
        <li><a href="tree-view.html">Tree View <span class="badge badge-red">New</span></a></li>

    </ul>
</li>-->
<!--<li>
    <a href="timeline.html">
        <i class="fa fa-clock-o"></i> <span>TimeLine</span>
    </a>
</li>-->
<!--<li>
    <a href="table.html">
        <i class="fa fa-table"></i> <span>Table</span>
    </a>
</li>-->
<!--<li>
    <a href="notification.html">
        <i class="fa fa-bullhorn"></i> <span>Notification</span>
    </a>
</li>-->
<!--<li>
    <a href="note-task.html">
        <i class="fa fa-pencil"></i> <span>Task & Note</span> <span class="badge badge-red">5</span>
    </a>
</li>-->
<!--<li>
    <a href="calender.html">
        <i class="fa fa-calendar-o"></i> <span>Calender</span> <span class="badge badge-red">15</span>
    </a>
</li>-->
<!--<li>
    <a href="#">
        <i class="fa fa-map-marker"></i>
        <span>Maps</span>
    </a>
    <ul>
        <li><a href="googlemap.html">Google Map</a></li>
        <li><a href="vector-maps.html">Vector Map</a></li>
    </ul>
</li>-->
<!--<li>
    <a href="#">
        <i class="fa fa-image"></i>
        <span>Gallery</span>
    </a>
    <ul>
        <li><a href="four-column-gallery.html">Four Column</a></li>
        <li><a href="three-column-gallery.html">Three Column</a></li>
        <li><a href="two-column-gallery.html">Two Column</a></li>
    </ul>
</li>-->
<!--<li>
    <a href="#">
        <i class="fa fa-gift"></i>
        <span>Media</span>
        <span class="badge badge-red">New</span>
    </a>
    <ul>
        <li><a href="image-crop.html">Image Cropper</a></li>
        <li><a href="magnify.html">Image Magnify <span class="badge badge-red">New</span></a></li>
        <li><a href="media.html">Media Player <span class="badge badge-red">New</span></a></li>
    </ul>
</li>-->
<!--<li>
    <a href="#">
        <i class="fa fa-list-alt"></i>
        <span>Pages</span>
    </a>
    <ul>
        <li><a href="typography.html">Typography</a></li>
        <li><a href="pricing-table.html">Pricing Table</a></li>
        <li><a href="profile.html">Profile</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="lock-screen.html">Lock Screen</a></li>
        <li><a href="registration.html">Registration</a></li>
        <li><a href="coming-soon.html">ComingSoon</a></li>
        <li><a href="widget.html">Widgets</a></li>
        <li><a href="grid.html">Grids</a></li>
        <li><a href="panel.html">Panels</a></li>
        <li><a href="404.html">404</a></li>
        <li><a href="500.html">500</a></li>
    </ul>
</li>-->
<!--<li>
    <a href="#">
        <i class="fa fa-flag-o"></i>
        <span>Icons</span>
    </a>
    <ul>
        <li><a href="font-awesome.html">Font Awesome</a></li>
        <li><a href="glyphicons.html">Glyphicons</a></li>
    </ul>
</li>-->
<!--<li>
    <a href="#">
        <i class="fa fa-flash"></i>
        <span>Layout</span>
    </a>
    <ul>
        <li><a href="blank.html">Blank Page</a></li>
        <li><a href="minimize-left.html">Minimize Left</a></li>
        <li><a href="maximize-right.html">Maximize Right</a></li>
        <li><a href="with-footer.html">With Footer</a></li>
        <li>
            <a href="#">Color</a>
            <ul>
                <li><a href="red-color.html">Red</a></li>
                <li><a href="blue-color.html">Blue</a></li>
                <li><a href="light-green-color.html">Light Green</a></li>
                <li><a href="black-color.html">Black</a></li>
                <li><a href="deep-blue-color.html">Deep Blue</a></li>
            </ul>
        </li>
    </ul>
</li>-->
<!--<li>
    <a href="#">
        <i class="fa fa-magnet"></i>
        <span>Multi Level Menu</span>
    </a>
    <ul>
        <li><a href="javascript:void(0)">Page 1</a></li>
        <li>
            <a href="javascript:void(0)">Page 2</a>
            <ul>
                <li><a href="javascript:void(0)">Page 2.1</a></li>
                <li>
                    <a href="javascript:void(0)">Page 2.2</a>
                    <ul>
                        <li><a href="javascript:void(0)">Page 2.2.1</a></li>
                        <li><a href="javascript:void(0)">Page 2.2.2</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0)">Page 3</a>
            <ul>
                <li><a href="javascript:void(0)">Page 3.1</a></li>
                <li>
                    <a href="javascript:void(0)">Page 3.2</a>
                    <ul>
                        <li><a href="javascript:void(0)">Page 3.2.1</a></li>
                        <li>
                            <a href="javascript:void(0)">Page 3.2.2</a>
                            <ul>
                                <li><a href="javascript:void(0)">Page 3.2.2.1</a></li>
                                <li><a href="javascript:void(0)">Page 3.2.2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</li>-->
</ul>
<!--Left navigation end-->
</section>