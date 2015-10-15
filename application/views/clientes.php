<?php echo $this->load->view('tpl/head');?>
<body class="clientesbody">
<?php echo $this->load->view('tpl/menu');?>
<div style="position:relative;">
	<div id="lampara"><img src="<?php echo URL_BASE?>f/img/arana.png" class="logo" style="width:100%;height:100%"></div>
	<div><img src="<?php echo URL_BASE?>f/img/fondoclientes.jpg" style="width:100%;height:100%"/></div>
	<div class="texto_clientes">
		Algunos de nuestros principales clientes:
		<ul>
			<li><span>Telefónica / Movistar</span></li>
			<li><span>Herbalife</span></li>
			<li><span>Lan Perú - Latam Airlines Group</span></li>
			<li><span>Nike</span></li>
			<li><span>Backus Sab Miller</span></li>
			<li><span>Kia Motors</span></li>
			<li><span>Turismo Chile</span></li>
			<li><span>Saga Fallabella</span></li>
			<li><span>Seguros La Positiva</span></li>
			<li><span>Disney Event / Latin America</span></li>
			<li><span>CNN en Español / Turner Group</span>
			</li>
		</ul>

	</div>
	<div class="logotipo_nosotros"><a href="<?php echo URL_BASE?>"><img src="<?php echo URL_BASE?>f/img/logotipo.png" class="logo" style="width:100%;height:100%"></a></div>
	<div class="personaje_clientes"><img src="<?php echo URL_BASE?>f/img/mujer_clientes.png" style="width:100%;height:100%"></div>
	</div>
<?php echo $this->load->view('tpl/footer');?>