<?php echo $this->load->view('tpl/head');?>
<body class="nosotrosbody">
<?php echo $this->load->view('tpl/menu');?>
<div style="position:relative;overflow:hidden">
	<div><img src="<?php echo URL_BASE?>f/img/fondonosotros2.jpg" style="width:100%;height:100%"/></div>
	<div class="texto_nosotros">Nuestro staff está conformado<br> por experimentados<br> profesionales, altamente<br> reconocidos y calificados<br> en el medio, con exitosas<br> producciones realizadas<br> a nivel nacional e internacional <br>(Ecuador, Colombia,<br> Aruba, México).</div>
	<div class="logotipo_nosotros"><a href="<?php echo URL_BASE?>"><img src="<?php echo URL_BASE?>f/img/logotipo.png" class="logo" style="width:100%;height:100%"></a></div>
	<div class="personaje_nosotros"><img src="<?php echo URL_BASE?>f/img/personaje_nosotros.png" style="width:100%;height:100%"></div>
	<div id="luz"><img src="<?php echo URL_BASE?>f/img/lampara.png" style="width:100%;height:100%"/></div>
</div>

<?php echo $this->load->view('tpl/footer');?>