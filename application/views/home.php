<?php echo $this->load->view('tpl/head');?>
<body>
<?php echo $this->load->view('tpl/menu');?>
<div style="position:relative">

	<img src="<?php echo URL_BASE?>f/img/fondocompletonochegrande.jpg" style="width:1px;height:1px" />
	<img src="<?php echo URL_BASE?>f/img/fondocompletonocheosc.jpg" style="width:1px;height:1px"/>
<div><img id="fondohome" src="<?php echo URL_BASE?>f/img/fondocompletodiagrande.jpg" style="width:100%;height:100%" /></div>
<div id="credito"><img src="<?php echo URL_BASE?>f/img/creditos.jpg"/></div>
      <div id="reloj"><img src="<?php echo URL_BASE?>f/img/reloj.png" style="width:100%;height:100%"/></div>
  <div id="logogrande"><img src="<?php echo URL_BASE?>f/img/logogrande_noche.png" style="width:100%;height:100%"/></div>
    <div id="relojdos"><img src="<?php echo URL_BASE?>f/img/reloj.png" style="width:100%;height:100%"/></div>
   		<div class="redes">
   		<a href="https://www.facebook.com/profile.php?id=100000399854498s" target="_blank"><img src="<?php echo URL_BASE?>f/img/Facebook_icon.png" style="width:100%;height:100%" ></a>
   		</div>
   		<div class="redes1">
		<a href="http://twitter.com/#!/CircusPeru" target="_blank"><img src="<?php echo URL_BASE?>f/img/Twitter_icon.png" target="_blank" style="width:100%;height:100%"></a>
		</div>
		<!--<div id="nube">
         <div id="<?php echo $genero?>"><img src="<?php echo URL_BASE?>f/img/personaje<?php echo $genero?>.png" style="width:100%;height:100%"/></div></div>
         <div id="cabeza<?php echo $genero?>"><img src="<?php echo URL_BASE?>f/img/cabeza<?php echo $genero?>.png"/></div>-->
</div>
<?php echo $this->load->view('tpl/footer');?>