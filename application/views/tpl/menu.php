
		<div id="menu">
		<div id="home" <?php echo ($this->uri->uri_string=='') ? 'class="activo"':'';?>><a href="<?php echo URL_BASE?>">Home</a></div>
		<div id="nosotros" <?php echo ($this->uri->uri_string=='nosotros') ? 'class="activo"':'';?>><a href="<?php echo URL_BASE?>nosotros">Nosotros</a></div>
		<div id="trabajo" <?php echo ($this->uri->uri_string=='trabajo') ? 'class="activo"':'';?>><a href="<?php echo URL_BASE?>trabajo">Trabajos</a></div>
		<div id="trabajo" <?php echo ($this->uri->uri_string=='clientes') ? 'class="activo"':'';?>><a href="<?php echo URL_BASE?>clientes">Clientes</a></div>
		<div id="contacto" <?php echo ($this->uri->uri_string=='contacto') ? 'class="activo"':'';?>><a href="<?php echo URL_BASE?>contacto">Contacto</a></div>

		</div>