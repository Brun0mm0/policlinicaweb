<?
include("includes/header.php");
include("includes/conn.php");
include("includes/funciones.php");

$pdf = getdat("pdf");
$categoria = getdat("categoria",1);
$subcategoria = getdat("subcategoria",1);



/*
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(strpos(strtolower($_SERVER["HTTP_REFERER"]),"bancaria")){
		$destino = "info@policlinicabancaria.com.ar";
		$kv = array();
		$eml = "";
		foreach ($_POST as $clave => $val) {
			$eml.= "$clave =  $val\n";
		}
		$eml.= "\n\nGenerado dinamicamente el ".date("d/m/Y H:i:s",time())." desde IP.:".$_SERVER["REMOTE_ADDR"];
		$_SESSION["envio"] = mail($destino,"Form de Contacto web policlinicabancaria.com.ar",$eml,"FROM: $destino","-f ".$destino);
	}
}
*/



if($pdf){
	?>
<table width="100%" border="0">
                                <tr>
                                  <td><img src="https://2021.policlinicabancaria.com.ar/assets/images/logo-top-240x76.jpg"></td>
                                </tr>

                                <tr>
                                  <td>&nbsp;</td>
                                </tr>


<?

$sql = "select * from categorias where (select count(*) from practicas where categoria=categorias.id) > 0 ";
if($categoria) $sql.=" and id=$categoria ";
$sql.=" order by categoria";
$rs = mysqli_query($db,$sql);
while($i= mysqli_fetch_array($rs)){
	$observaciones = getdb($i["observaciones"]);
?>
                                <tr>
                                  <td align="center" bgcolor="#000000"><span style="text-align: center"></span><strong style="color: #FFFFFF"><?=trim(getdb($i["categoria"]))?></strong></td>
                                </tr>
	<?
	$sql = "select * from subcategorias where 1 and categoria=".$i["id"]." ";
	if($subcategoria) $sql.= " and id=$subcategoria ";
	$sql.=" order by subcategoria";
	$rsa = mysqli_query($db,$sql);
    if(mysqli_num_rows($rsa)){
	while($f= mysqli_fetch_array($rsa)){

	?>
                                <tr>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td><strong><?=trim(getdb($f["subcategoria"]))?></strong></td>
                                </tr>
                                <!-- <tr>
                                  <td>&nbsp;</td>
                                </tr> -->
		<?
		$sql = "select * from practicas where  categoria=".$i["id"]." and subcategoria=".$f["id"]." and ifnull(practica,'') != '' order by practica";
		$rsb = mysqli_query($db,$sql);    
		if(mysqli_num_rows($rsb)){
		while($h= mysqli_fetch_array($rsb)){

		?>
                                <!-- <tr>
                                  <td data_temp_dwid="1">&nbsp;</td><td data_temp_dwid="1">&nbsp;</td><td>&nbsp;</td>
                                </tr> -->
                                <tr>
                                  <td><ul>
                                    <li><?=utf8_decode(getdb($h["practica"]))?></li>
                                  </ul></td>
                                </tr>
                                <!-- <tr>
                                  <td>&nbsp;</td>
                                </tr> -->


		<?}mysqli_free_result($rsb);}?>
	<?}mysqli_free_result($rsa);}?>
<?if($observaciones){?>
                                <tr>
                                  <td> - <strong><?=$observaciones?></strong></td>
                                </tr>
								<tr>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                
<?}?>
<?}mysqli_free_result($rs);?>
                         

              </table></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td height="40"><div align="center">
            <table id="Tabla_01" width="1022" height="80" border="0" cellpadding="0" cellspacing="0">

              <tr>
                <td width="917" height="62" bgcolor="#00CCFF"><div align="center"><span class="Estilo2">Av. Gaona 2197, 
                  Caballito, Ciudad Aut&oacute;noma de Buenos Aires - Tel&eacute;fonos: 
                  4586-8888 / 4586-8706</span></div></td>
              </tr>
            </table>
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
	<?
	exit;
}
?>
<!DOCTYPE html>
<html  lang="es">
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-top-240x76.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Contenido</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/icon54/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/chatbutton/floating-wpp.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
  <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/recaptcha.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <script src="assets/web/assets/lazyload/lazyload.js"></script>

  
  
<meta name="theme-color" content="#0f7699">
<link rel="manifest" href="manifest.json">
<script src="sw-connect.js"></script>
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/images/apple-launch-640x1136.png">
<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/images/apple-launch-750x1334.png">
<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="assets/images/apple-launch-1242x2208.png">
<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="assets/images/apple-launch-1125x2436.png">
<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/images/apple-launch-1536x2048.png">
<link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/images/apple-launch-1668x2224.png">
<link rel="apple-touch-startup-image" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/images/apple-launch-2048x2732.png">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="Policlínica Bancaria">
<link rel="apple-touch-icon" href="apple-touch-icon.png">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?include("inc/menu.php")?>

<section class="ext?ontent cid-slJ6k1DVSv" id="extContent11-e">
    
    
    <div class="container">
                              
					   
<!--  -->			









<form name="buscar" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
	<div class="form-row">
		<div class="dragArea form-row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h4 class="mbr-fonts-style display-5"><br>
			    Cartilla de Consultorios Ambulatorios y Prestaciones  de la PoBa</h4>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<hr>
			</div>
			<div data-for="categoria" class="col-lg-4 col-md-12 col-sm-12 form-group">
				<select name="categoria"  data-form-field="select" class="form-control display-7" id="categoria" onchange="document.forms['buscar']['subcategoria'].value='';document.forms['buscar'].submit();" >
				<option value="" selected>Seleccione la categoria</option>
				<?
				$sql = "select * from categorias where 1 order by categoria";
				$rs = mysqli_query($db,$sql);
				while($i= mysqli_fetch_array($rs)){
					$aux = "";
					if($categoria==$i["id"]) $aux=" selected";
				?>
				<option value="<?=$i["id"]?>"<?=$aux?>><?=utf8_encode(getdb($i["categoria"]))?></option>
				<?
				}mysqli_free_result($rs);
				?>
				</select>
			</div>
			<div data-for="subcategoria" class="col-lg-4 col-md-12 col-sm-12 form-group">
				<?$sql = "select * from subcategorias where (select count(*) from practicas where subcategoria=subcategorias.id) > 0 and categoria=$categoria order by subcategoria";
				$rs = mysqli_query($db,$sql);
				$rc = mysqli_num_rows($rs);
			   ?>
				<select name="subcategoria" onchange="document.forms['buscar'].submit();" data-form-field="select1" class="form-control display-7" id="select1-formbuilder-17">
				<option value="" selected>Seleccione la subcategoria</option>
				<?
				while($i= mysqli_fetch_array($rs)){
					$aux = "";
					if($subcategoria==$i["id"]) $aux=" selected";
				?>
				<option value="<?=$i["id"]?>"<?=$aux?>><?=utf8_encode(getdb($i["subcategoria"]))?></option>
				<?
				}mysqli_free_result($rs);
				?>
				</select>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<button type="submit" class="btn btn-primary display-7">Buscar</button><?if(metodo=="POST"){?>&nbsp;<a href="http://pdfgen.racserver.com/pdf.php?url=<?=base64_encode("http://2021.policlinicabancaria.com.ar/cartilla.php?categoria=".$categoria."&subcategoria=".$subcategoria."&pdf=1")?>" class="btn btn-primary display-7" ><i class="fa fa-file-pdf-o" style="font-size:24px;color:white"></i>&nbsp;&nbsp;PDF</a><?}?>
			</div>

	</div>
</form>


		



<?
function tf($a){
	$aux = strip_tags(trim(stripslashes($a)));
	$aux = mb_convert_encoding( $aux, "UTF-8", "HTML-ENTITIES" );
	$aux = htmlspecialchars($aux,UTF-8);
	return trim($aux);
}
if(metodo=="POST"){
$sql = "select * from categorias where (select count(*) from practicas where categoria=categorias.id) > 0 ";
if($categoria) $sql.=" and id=$categoria ";
$sql.=" order by categoria";
$rs = mysqli_query($db,$sql);
while($i= mysqli_fetch_array($rs)){
	$observaciones = getdb($i["observaciones"]);
?>
                                <div class="col-lg-12 col-md-12 col-sm-12"><B><U><?=utf8_encode(getdb($i["categoria"]))?></U></B></div>
	<?
	$sql = "select * from subcategorias where 1 and categoria=".$i["id"]." ";
	if($subcategoria) $sql.= " and id=$subcategoria ";
	$sql.=" order by subcategoria";
	$rsa = mysqli_query($db,$sql);
    if(mysqli_num_rows($rsa)){
	while($f= mysqli_fetch_array($rsa)){

	?>
                                <div class="col-lg-12 col-md-12 col-sm-12">&nbsp;&nbsp;&nbsp;<B><?=utf8_encode(getdb($f["subcategoria"]))?></B></div>

		<?
		$sql = "select * from practicas where  categoria=".$i["id"]." and subcategoria=".$f["id"]." and ifnull(practica,'') != '' order by practica";
		$rsb = mysqli_query($db,$sql);    
		if(mysqli_num_rows($rsb)){
		while($h= mysqli_fetch_array($rsb)){

		?>
                                <div class="col-lg-12 col-md-12 col-sm-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=trim(getdb($h["practica"]))?></div>
                                  


		<?}mysqli_free_result($rsb);}?>
	<?}mysqli_free_result($rsa);}?>
<?if($observaciones){?>
                                <div class="col-lg-12 col-md-12 col-sm-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$observaciones?></div>
                                
<?}?>
<?}mysqli_free_result($rs);}?>



		   

					</p>

		</div>
    </div>
</section>



<section class="mbr-section extContent cid-slJ6umHHp6" id="extContent15-f">

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-12 text-section">
                <p class="mbr-fonts-style mbr-text align-center display-7"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form cid-rGtUm5MauT" id="form1-b">
    
    
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12 m-auto">
                <div class="align-wrap">
                    <div class="icons-wrap">
                        <div class="icon-wrap">
                            <span class="mbr-iconfont mobi-mbri-calendar mobi-mbri" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153);"></span>
                            <div class="text-wrap">
                                <h3 class="icon-title mbr-bold mbr-fonts-style display-7">Horario atención ambulatoria:</h3>
                              <p class="mbr-text mbr-regular mbr-fonts-style display-4">Lunes a viernes : 8:00 - 20:00 hs.<br>
                                Guardia 24 hs. <br>
                              Clínica Médica - Cardiología - Traumatología - Cirugía - Ginecología - Urología - Neurocirugía - Cirugía Cardiovascular.</p>
                            </div>
                        </div>


                    </div>


                    

                    <div class="icons-wrap">
                        <div class="icon-wrap">
                            <span class="mbr-iconfont mbrib-pin"></span>
                            <div class="text-wrap">
                                <h3 class="icon-title mbr-bold mbr-fonts-style display-7">Dirección:</h3>
                                <p class="mbr-text mbr-regular mbr-fonts-style display-4">Avda. Gaona 2197 - CABA - Argentina</p>
                            </div>
                        </div>


                    </div>
                </div>

            </div>



            <div class="col-lg-6 mx-auto mbr-form" data-form-type="formoid">
<?//if(!$_SESSION["envio"]){?>

<!-- <form  method="POST" name="contacto" id="contacto" class="mbr-form form-with-styler" >

<div class="dragArea form-row">
<div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="nameFirst">
<input type="text" name="nombre" placeholder="Nombre" data-form-field="nameFirst" class="form-control display-7" value="" id="nameFirst-form1-b" required>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="nameLast">
<input type="text" name="apellido" placeholder="Apellido" data-form-field="nameLast" class="form-control display-7" value="" id="nameLast-form1-b" required>
</div>
<div data-for="text2" class="col-lg-12 col-md-12 col-sm-12 form-group">
<input type="text" name="direccion" placeholder="Dirección" data-form-field="text" class="form-control display-7" value="" id="text2-form1-b">
</div>
<div data-for="email" class="col-lg-6 col-md-12 col-sm-12 form-group">
<input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control display-7" value="" id="email-form1-b" required>
</div>
<div data-for="phone" class="col-lg-6 col-md-12 col-sm-12 form-group">
<input type="tel" name="telefono" placeholder="Teléfono"  data-form-field="phone" class="form-control display-7" value="" id="phone-form1-b">
</div>



<div data-for="textarea" class="col-lg-12 col-md-12 col-sm-12 form-group">
<textarea name="mensaje" placeholder="Mensaje"  data-form-field="textarea" class="form-control display-7" id="textarea-form1-b" required></textarea>
</div>
<div class="col-auto">
<button type="submit" class="btn btn-primary display-7" onclick="document.forms['contacto'].submit();">Enviar</button>
</div>
</div>
</form> -->
<?//}else{?>
<!-- <h3 class="icon-title mbr-bold mbr-fonts-style display-7">Gracias por comunicarse con nosotros,<BR>en breve nos contactaremos con Ud.</h3> -->
<div class="icons-wrap">
                        <div class="icon-wrap">
                            <span class="mbr-iconfont icon54-v1-medical-bag"></span>
                            <div class="text-wrap">
                              <h3 class="icon-title mbr-bold mbr-fonts-style display-7">Oftalmología:</h3>
                                <p class="mbr-text mbr-regular mbr-fonts-style display-4">Guardia: </p>
                                <p>·         Lunes a viernes de 8.00 a 17.00 hs.</p>
                                <p>Demanda de lentes:</p>
                              <p>·         Lunes a viernes de 10.30 a 12.00 hs.                            </p>
                            </div>
                        </div>


                    </div>
<?//}?>
</div>
        </div>
    </div>
</section>

<section class="cid-slJ5GObz8z" id="footer1-8">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2021 - Todos los derechos reservados.
                </p>
            </div>
        </div>
    </div>
</section>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/chatbutton/floating-wpp.js"></script>
  <script src="assets/chatbutton/script.js"></script>
  <script src="assets/formstyler/jquery.formstyler.js"></script>
  <script src="assets/formstyler/jquery.formstyler.min.js"></script>
  <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid.min.js"></script>
  
  

	<?include("inc/pie.php")?>

 </body>
</html>