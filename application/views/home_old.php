<?php echo $this->load->view('tpl/head');?>
<body>
<?php echo $this->load->view('tpl/menu');
?>

<div id="<?php echo $estilo?>">
	<div id="credito">
  	</div>
    <div id="<?php echo $reloj?>"></div>
    <div id="relojdos"></div>
      <div id="nube"></div>
         <div id="<?php echo $genero?>"></div>
         <div id="cabeza<?php echo $genero?>"></div>

</div>
<?php echo $this->load->view('tpl/footer');?>