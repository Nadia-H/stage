<section id="left-navigation">
<!--Left navigation user details start-->
<div class="user-image">
    <img src="<?php echo $this->webroot;?>assets/images/demo/avatar-80.png" alt=""/>
    <div class="user-online-status"><span class="user-status is-online  "></span> </div>
</div>
<ul class="social-icon">
    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
    <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
    <li><a href="javascript:void(0)"><i class="fa fa-bitbucket"></i></a></li>
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
<li class="active">
    <a class="active" href="index.html">
        <i class="fa fa-dashboard"></i> <span>Stage</span>
    </a>
</li>
<li class="active">
<a href="<?php echo $this->webroot;?>produits/index">Produits</a>
        
    </a>
</li>
<li>
    <a href="#">
        <i class="fa fa-user"></i> <span>Client</span>
    </a>
    <ul>
        <li><a href="<?php echo $this->webroot;?>Clients/index">CLIENT</a></li>
    </ul>
    
</li>
<li>
    <a href="#">
        <i class="fa fa-shopping-cart"></i> <span>Commandes</span> 
    </a>
    <ul>
        <li><a href="<?php echo $this->webroot;?>Commandes/index">Commandes</a></li>
    </ul>
    
</li>
<li>
    <a href="#">
        <i class="fa fa-shopping-cart"></i> <span>Ventes</span> 
    </a>
    <ul>
        <li><a href="<?php echo $this->webroot;?>Ventes/index">Ventes</a></li>
    </ul>
    
</li>

 
        </li>
    </ul>
</li>
</ul>
<!--Left navigation end-->
</section>