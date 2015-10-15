<?php echo $this->load->view('tpl/head');?>
<body class="bdcontacto">
  <?php echo $this->load->view('tpl/menu');?>
	<div style="position:relative;">
    <div><img src="<?php echo URL_BASE?>f/img/fondocontacto.jpg" style="width:100%;height:100%"/></div>
    <div id="escalera_contacto"><img src="<?php echo URL_BASE?>f/img/escalera_contacto.png" style="width:100%;height:100%"/></div>
    <div id="telefono_contacto"><img src="<?php echo URL_BASE?>f/img/telefono_contacto.png" style="width:100%;height:100%"/></div>
  <div id="contactos">
			<ul>
				<li><strong>Jorge Arriola</strong><br>
					<a href="mailto:jorge@circuseventos.com">jorge@circuseventos.com</a><br><br>
				</li>
				<li><strong>Jimena Crousillat</strong><br>
					<a href="mailto:jimena@circuseventos.com">jimena@circuseventos.com</a><br><br>
				</li>
				<li><strong>Pedro Silva-Arrieta</strong><br>
					<a href="mailto:pedro@circuseventos.com">pedro@circuseventos.com</a><br><br>
				</li>
	       </div>
<div id="formulario">
	     <font color="red"><?php echo validation_errors();?></font>
      <?php if(isset($error) and  $error==false):?>
      <font color="green">Mensaje enviado correctamente!</font>
      <?php endif ?>
<?php echo form_open('contacto/enviar') ?>
<table width="38%" border="0" class="tablaform">
  <tr>
    <td><label for="textfield"></label>
    <input name="nombres" type="text" id="textfield" size="30"  placeholder="Nombre"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input name="apellidos" type="text" id="textfield2" size="30" placeholder="Apellidos" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input name="correo1" type="text" id="textfield3" size="30"  placeholder="Correo" /></td>
  </tr>
  <tr>
    <td><input name="fijo" type="text" id="textfield4" size="20" placeholder="Teléfono" /></td>  
  </tr>
  <tr>
    <td colspan="2"><label for="textarea"></label>
    <textarea name="mensaje" id="mensaje" cols="40" rows="2" placeholder="Mensaje"></textarea></td>
  </tr>
    <tr>
    <td colspan="2" align="center">
<input type="submit" value="Enviar"/>
    </td>
  </tr>
</table>
</form>
</div>
<div id="gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d15604.386009685439!2d-76.98555286004117!3d-12.105545747659773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e1!4m5!1s0x9105c797fc5550d9%3A0x2bae9098d9103d5a!2sFrancisco+De+Cuellar%2C+Lima+15023!3m2!1d-12.1055459!2d-76.976326!4m4!1s0x9105c797fc5550d9%3A0x2bae9098d9103d5a!3m2!1d-12.1055459!2d-76.976326!5e0!3m2!1ses!2spe!4v1439708265270" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
  <div class="redes">
      <a href="https://www.facebook.com/profile.php?id=100000399854498s" target="_blank"><img src="<?php echo URL_BASE?>f/img/Facebook_icon.png" style="width:100%;height:100%" ></a>
      </div>
      <div class="redes1">
    <a href="http://twitter.com/#!/CircusPeru" target="_blank"><img src="<?php echo URL_BASE?>f/img/Twitter_icon.png" target="_blank" style="width:100%;height:100%"></a>
    </div>
</div>

<?php echo $this->load->view('tpl/footer');?>
