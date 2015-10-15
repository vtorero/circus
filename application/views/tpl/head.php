<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Circus Eventos <?php echo $this->uri->uri_string?></title>
<link href="<?php echo URL_BASE?>f/css/estilos.css" rel="stylesheet" type="text/css">
<script src="<?php echo URL_BASE?>f/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<?php if($this->uri->uri_string=='trabajo'):?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo URL_BASE?>f/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>  
<link rel="stylesheet" href="<?php echo URL_BASE?>f/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
 <style type="text/css" media="screen">
      
      
      h1 { font-family: "gotham_thinregular",Helvetica,Verdana; font-style: italic; margin-bottom: 10px; }
      
      h2 {
        font-family: "gotham_thinregular",Helvetica,Verdana;;
        font-style: italic;
        margin: 25px 0 5px 0;
      }
      
      p { font-size:13px;
      font-family: Arial; }
      
      .galeriacol1 ul li { display: inline; }
      
      .wide {
        border-bottom: 1px #000 solid;
        width: 4000px;
      }
      
      .fleft { float: left; margin: 0 20px 0 0; }
      
      .cboth { clear: both; }
      
   
    </style>
  <?php endif?>
<script type="text/javascript">
 function cambiar () {
  document.getElementById('fondohome').src = "<?php echo URL_BASE?>f/img/fondocompletonochegrande.jpg";
 }

function cambiar2 () {
  document.getElementById('fondohome').src = "<?php echo URL_BASE?>f/img/fondocompletonocheosc.jpg";
 }


 tiempo=window.setTimeout('cambiar()',1000);
 tiempo=window.setTimeout('cambiar2()',3000);
  </script>
</head>