<?
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(strpos(strtolower($_SERVER["HTTP_REFERER"]),"bancaria")){
		$destino = "info@policlinicabancaria.com.ar";
		$kv = array();
		$eml = "";
		foreach ($_POST as $clave => $val) {
			$eml.= "$clave =  $val\n";
		}
		$eml.= "\n\nGenerado dinamicamente el ".date("d/m/Y H:i:s",time())." desde IP.:".$_SERVER["REMOTE_ADDR"];
		$_SESSION["envio"] = "";//mail($destino,"Form de Contacto web policlinicabancaria.com.ar",$eml,"FROM: $destino","-f ".$destino);
	}
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
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/br-style/br-popup.css?3">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="assets/icon54-v2/style.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/icon54/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/chatbutton/floating-wpp.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
  <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/recaptcha.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
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
</head>
<body>
  
<!-- FIXME:  ### PUREBA POP-UP ### -->


<!-- ########################## -->

<?include("inc/menu.php")?>

<div class="modal mbr-popup cid-sku50ttUcz fade" tabindex="-1" role="dialog" data-overlay-color="#000000" data-overlay-opacity="0.8" id="mbr-popup-5" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title mbr-fonts-style display-5">Covid Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="currentColor">
                            <path d="M31.797 0.191c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.598 0.581 0.342 1.543 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM14.472 17.515c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.613 0.595 0.34 1.562 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM1.144 0.205c-0.584-0.587-1.544 0.336-0.942 0.942l30.654 30.651c0.613 0.625 1.563-0.325 0.942-0.942z"></path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae recusandae error ipsam
                    </p>

                    <div>
                        <div class="card-img mbr-figure">
                            <img src="assets/images/mbr-936x503.png" alt="">
                        </div>
                            

                            
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="corona-info.php">
                                Saber Más</a></div>
                    </div>
                </div>
            </div>
        </div>

<div class="modal mbr-popup cid-slIVp1tvf6 fade" tabindex="-1" role="dialog" data-overlay-color="#000000" data-overlay-opacity="0.8" id="mbr-popup-6" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title mbr-fonts-style display-5">Turnos Online</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="currentColor">
                            <path d="M31.797 0.191c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.598 0.581 0.342 1.543 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM14.472 17.515c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.613 0.595 0.34 1.562 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM1.144 0.205c-0.584-0.587-1.544 0.336-0.942 0.942l30.654 30.651c0.613 0.625 1.563-0.325 0.942-0.942z"></path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae recusandae error ipsam
                    </p>

                    <div>
                        <div class="card-img mbr-figure">
                            <img src="assets/images/pop-up-contacto1-800x534.jpeg" alt="">
                        </div>
                            

                            
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="#">
                                Llamar</a></div>
                    </div>
                </div>
            </div>
        </div>

<div class="modal mbr-popup cid-slOHO7O7Lx fade" tabindex="-1" role="dialog" data-overlay-color="#000000" data-overlay-opacity="0.8" id="mbr-popup-u" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title mbr-fonts-style display-5">Central de Turnos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="currentColor">
                            <path d="M31.797 0.191c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.598 0.581 0.342 1.543 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM14.472 17.515c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.613 0.595 0.34 1.562 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM1.144 0.205c-0.584-0.587-1.544 0.336-0.942 0.942l30.654 30.651c0.613 0.625 1.563-0.325 0.942-0.942z"></path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae recusandae error ipsam
                    </p>

                    <div>
                        <div class="card-img mbr-figure">
                            <img src="assets/images/pop-up-contacto2-800x534.jpeg" alt="">
                        </div>
                            

                            
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="#">
                                Llamar</a></div>
                    </div>
                </div>
            </div>
        </div>

<div class="modal mbr-popup cid-slOHOAwVSI fade" tabindex="-1" role="dialog" data-overlay-color="#000000" data-overlay-opacity="0.8" id="mbr-popup-v" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title mbr-fonts-style display-5">Emergencias y Visitas Médicas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="currentColor">
                            <path d="M31.797 0.191c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.598 0.581 0.342 1.543 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM14.472 17.515c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.613 0.595 0.34 1.562 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM1.144 0.205c-0.584-0.587-1.544 0.336-0.942 0.942l30.654 30.651c0.613 0.625 1.563-0.325 0.942-0.942z"></path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae recusandae error ipsam
                    </p>

                    <div>
                        <div class="card-img mbr-figure">
                            <img src="assets/images/pop-up-emergencias-800x534.jpeg" alt="">
                        </div>
                            

                            
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="#">
                                Llamar</a></div>
                    </div>
                </div>
            </div>
        </div>

<div class="modal mbr-popup cid-slOHOYB5uD fade" tabindex="-1" role="dialog" data-on-timer-delay="500" data-overlay-color="#000000" data-overlay-opacity="0.8" id="mbr-popup-w" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title mbr-fonts-style display-5">Derivaciones y Traslados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="currentColor">
                            <path d="M31.797 0.191c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.598 0.581 0.342 1.543 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM14.472 17.515c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.613 0.595 0.34 1.562 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM1.144 0.205c-0.584-0.587-1.544 0.336-0.942 0.942l30.654 30.651c0.613 0.625 1.563-0.325 0.942-0.942z"></path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae recusandae error ipsam
                    </p>

                    <div>
                        <div class="card-img mbr-figure">
                            <img src="assets/images/pop-up-derivaciones-800x534.jpeg" alt="">
                        </div>
                            

                            
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="#">
                                Llamar</a></div>
                    </div>
                </div>
            </div>
        </div>












<?
include('Mobile_Detect.php');
$detect = new Mobile_Detect;

if (!$detect->isMobile()  && !$detect->isTablet() ){
?>



  

  
  <section class="header4 cleanm4_header4 cid-sLyV7pnvX9 mbr-fullscreen" data-bg-video="https://www.youtube.com/watch?v=OxX7HjdCSl8" id="header4-1">

	

	<div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(11, 99, 125);">
	</div>

	<div class="align-left container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="wrap d-flex flex-column">
					<!-- <h1 class="mbr-section-title mbr-fonts-style mbr-bold align-left w-100 display-2" style="color:white">Policlinica Bancaria</h1> -->
					
					<p class="mbr-text align-left mbr-fonts-style mt-4 display-4"></p>
					<div class="buttons-wrap d-flex mt-4 w-100 justify-content-start">
						
						<div class="video-wrap d-flex align-items-center">
							<div class="mbr-media show-modal align-left d-flex align-items-center" data-modal=".modalWindow">
								<div class="icon-wrap">
									<span class="mbr-iconfont fa-play fa"></span>
									<span class="line-video-animation line-video-1"></span>
									<br>
									<span class="line-video-animation line-video-2"></span>
								</div>
							</div><BR>
							<h4 class="mbr-text mbr-fonts-style align-self-center ml-3 my-auto mbr-bold display-4" style="color:white" data-modal=".modalWindow"><em>
								Ver Video Completo</em>
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mbr-arrow hidden-sm-down" aria-hidden="true">
		<a href="#next">
			<i class="mbri-arrow-down mbr-iconfont"></i>
		</a>
	</div>
	<div>
		<div class="modalWindow" style="display: none;">
			<div class="modalWindow-container">
				<div class="modalWindow-video-container">
					<div class="modalWindow-video">
						<iframe width="100%" height="100%" frameborder="0" allowfullscreen="1" data-src="https://www.youtube.com/watch?v=OxX7HjdCSl8"></iframe>
					</div>
					<a class="close" role="button" data-dismiss="modal">
						<span aria-hidden="true" class="mbri-close mbr-iconfont closeModal"></span>
						<span class="sr-only">Close</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	
</section>
<?}else{?>
<section class="header4 cleanm4_header4 cid-sLyW8K7QBz mbr-fullscreen" id="header4-3">

	

	<div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(11, 99, 125);">
	</div>

	<div class="align-left container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="wrap d-flex flex-column">
					<!-- <h1 class="mbr-section-title mbr-fonts-style mbr-bold align-left w-100 display-2" style="color:white">Policlinico Bancario</h1> -->
					
					<p class="mbr-text align-left mbr-fonts-style mt-4 display-4"></p>
					<div class="buttons-wrap d-flex mt-4 w-100 justify-content-start">
						
						<div class="video-wrap d-flex align-items-center">
							<div class="mbr-media show-modal align-left d-flex align-items-center" data-modal=".modalWindow">
								<div class="icon-wrap">
									<span class="mbr-iconfont fa-play fa"></span>
									<span class="line-video-animation line-video-1"></span>
									<br>
									<span class="line-video-animation line-video-2"></span>
								</div>
							</div><BR>
							<h4 class="mbr-text mbr-fonts-style align-self-center ml-3 my-auto mbr-bold display-4" style="color:white" data-modal=".modalWindow"><em>
								Ver Video Completo</em>
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mbr-arrow hidden-sm-down" aria-hidden="true">
		<a href="#next">
			<i class="mbri-arrow-down mbr-iconfont"></i>
		</a>
	</div>
	<div>
		<div class="modalWindow" style="display: none;">
			<div class="modalWindow-container">
				<div class="modalWindow-video-container">
					<div class="modalWindow-video">
						<iframe width="100%" height="100%" frameborder="0" allowfullscreen="1" data-src="https://www.youtube.com/watch?v=OxX7HjdCSl8"></iframe>
					</div>
					<a class="close" role="button" data-dismiss="modal">
						<span aria-hidden="true" class="mbri-close mbr-iconfont closeModal"></span>
						<span class="sr-only">Close</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	
</section>

<?}?>













<section class="header1 petsm4_header1 cid-slOxsFEDGc" id="header1-t">

	

	

	<div class="container-fluid">
		<div class="row"></div>
	</div>
</section>









<section class="header1 petsm4_header1 cid-slOxsFEDGc" id="header1-t">

	

	

	<div class="container-fluid">
		<div class="row">

		</div>
	</div>
</section>










<section class="features1 cid-shRho7htj7" id="features1-0">

    

    

    <div class="container-fluid">
        
         <div class="row showArrow">

			<div class="card col-md-6 col-lg-3">
                <div class="card-inner">
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <div class="animation__background"></div>
                <div class="icon__block">
                    
					<span class="mbr-iconfont fa-hospital-o fa"></span>
                </div>
                <div class="card-box">
                    <a href="https://policlinicabancaria.axonico.ar/login.php?red=NTk="  target="_blank"><h4 class="card-title mbr-fonts-style display-5"><div>Portal del paciente</div></h4></a>
                    
                </div>
              </div>
            </div>

            <div class="card col-md-6 col-lg-3">
                <div class="card-inner">
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <div class="animation__background"></div>
                <div class="icon__block">
                  <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-contact-form mobi-mbri"></span>
              </div>
              <div class="card-box">
                  <a href="corona-recetas.php"><h4 class="card-title mbr-fonts-style display-5">Recetas Digitales</h4></a>
                  
              </div>
              </div>
            </div>

            <div class="card col-md-6 col-lg-3">
                <div class="card-inner">
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <div class="animation__background"></div>
                <div class="icon__block">
                    <span class="mbr-iconfont mobi-mbri-file mobi-mbri"></span>
                </div>
                <div class="card-box">
                    <a href="assets/images/cartilla-septiembre.pdf" target="_blank"><h4 class="card-title mbr-fonts-style display-5">Cartilla De Consultorios Y Prestaciones</h4></a>
                    <!-- <a href="cartilla.php"><h4 class="card-title mbr-fonts-style display-5">Cartilla De Consultorios Y Prestaciones</h4></a> -->
                    
                   
                </div>
              </div>
            </div>

            <div class="card col-md-6 col-lg-3">
                <div class="card-inner">
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <div class="animation__background"></div>
                <div class="icon__block">
                    <span class="mbr-iconfont mbr-iconfont-1 icon54-v2-group-defense"></span>
                </div>
                <div class="card-box">
                    <a href=""><h4 class="card-title mbr-fonts-style display-5">Coseguros OSSSB</h4></a>
                    
                </div>
              </div>
            </div>

             

        </div>
        
    </div>
</section>

<section class="header1 petsm4_header1 cid-slOxsFEDGc" id="header1-t">

	

	

	<div class="container-fluid">
		<div class="row"></div>
	</div>
</section>





































<section class="features1 cid-rGtUjO6bAE" id="features3-4">

    

    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h2 class="align-center pb-5 mbr-bold mbr-fonts-style display-2">Nuestros Teléfonos</h2>
            </div>
            <div class="card col-12 col-md-6 col-lg-6">

            <!-- <svg class="svg21" xmlns="http://www.w3.org/2000/svg" width="309.28570556640625" height="336.02197265625" style="">
                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent" stroke="none">
                    </rect>
                    <g style="" class="currentLayer">
                        <path fill="#fcbc4d" fill-opacity="1" stroke="none" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M16.23957,92.58139C48.69547,-0.26251 138.67438,5.55148 201.82815,29.62874C264.98193,53.70599 372.00784,201.60914 247.27728,284.01577C122.54672,366.4224 112.51907,285.07282 76.57894,235.77145C40.63881,186.47008 -16.21636,185.42531 16.23957,92.58139z" id="svg_1" class="" transform="rotate(-4.6006340980529785 150.8597869873048,167.6643524169921) " filter=""></path>
                    </g>
                    <defs>
                        <marker id="Arrow1Mend" refX="0" refY="0" orient="auto" inkscape:stockid="Arrow1Mend" overflow="visible">
                            <path d="M-4,0 l-2,2 l7,-2 l-7,-2 l2,2 z" fill-rule="evenodd" stroke="#000" stroke-width="1pt" style="fill: none; stroke: none; stroke-dasharray: none;" id="svg_2">
                            </path>
                        </marker>
                    </defs>
                </svg>

                <svg class="svg22" xmlns="http://www.w3.org/2000/svg" width="309.28570556640625" height="336.02197265625" style="">
                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent" stroke="none">
                    </rect>
                    <g style="" class="currentLayer">
                        <path fill="#f2f2f4" fill-opacity="1" stroke="none" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M16.23957,92.58139C48.69547,-0.26251 138.67438,5.55148 201.82815,29.62874C264.98193,53.70599 372.00784,201.60914 247.27728,284.01577C122.54672,366.4224 112.51907,285.07282 76.57894,235.77145C40.63881,186.47008 -16.21636,185.42531 16.23957,92.58139z" id="svg_1" class="" transform="rotate(-4.6006340980529785 150.8597869873048,167.6643524169921) " filter=""></path>
                    </g>
                    <defs>
                        <marker id="Arrow1Mend" refX="0" refY="0" orient="auto" inkscape:stockid="Arrow1Mend" overflow="visible">
                            <path d="M-4,0 l-2,2 l7,-2 l-7,-2 l2,2 z" fill-rule="evenodd" stroke="#000" stroke-width="1pt" style="fill: none; stroke: none; stroke-dasharray: none;" id="svg_2">
                            </path>
                        </marker>
                    </defs>
                </svg>


                <div class="card-img">
                    <a href="#" data-toggle="modal" data-target="#mbr-popup-v"><span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span></a>
                </div>
                <div class="card-box m-auto">
                    <h4 class="card-title align-center pb-3 mbr-white mbr-bold mbr-fonts-style display-5">Emergencias y&nbsp; visitas médicas</h4>
                    <h5 class="link align-center mbr-semibold mbr-white mbr-fonts-style display-4"><a href="#" class="text-white text-primary" data-toggle="modal" data-target="#mbr-popup-v">Ver más</a></h5>
                </div> --><a href="tel:08005556722"><img src="assets/images/telefono-emergencias500.jpg" class="media" width="500" height="" alt=""/></a></div>

            <div class="card col-12 col-md-6 col-lg-6">

                <!-- <svg class="svg31 svg4" xmlns="http://www.w3.org/2000/svg" width="309.28570556640625" height="336.02197265625" style="">

                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent" stroke="none">
                    </rect>
                    <g style="" class="currentLayer">
                        <path fill="#f06538" fill-opacity="1" stroke="none" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M7.36264,184.55495C7.36264,65.42739 73.80818,33.47253 153.12638,33.47253C232.44458,33.47253 289.54946,75.86694 298.89012,197.19231C308.23078,318.51768 219.80721,227.94506 126.20331,280.69232C32.5994,333.43958 7.36264,303.68251 7.36264,184.55495z" id="svg_3" class="selected"></path>
                    </g>
                    <defs>
                        <marker id="Arrow1Mend" refX="0" refY="0" orient="auto" inkscape:stockid="Arrow1Mend" overflow="visible">
                            <path d="M-4,0 l-2,2 l7,-2 l-7,-2 l2,2 z" fill-rule="evenodd" stroke="#000" stroke-width="1pt" style="fill: none; stroke: none; stroke-dasharray: none;" id="svg_2">
                            </path>
                        </marker>
                    </defs>
                </svg>

                <svg class="svg32" xmlns="http://www.w3.org/2000/svg" width="309.28570556640625" height="336.02197265625" style="">

                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent" stroke="none">
                    </rect>
                    <g style="" class="currentLayer">
                        <path fill="#f2f2f4" fill-opacity="1" stroke="none" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M7.36264,184.55495C7.36264,65.42739 73.80818,33.47253 153.12638,33.47253C232.44458,33.47253 289.54946,75.86694 298.89012,197.19231C308.23078,318.51768 219.80721,227.94506 126.20331,280.69232C32.5994,333.43958 7.36264,303.68251 7.36264,184.55495z" id="svg_3" class="selected"></path>
                    </g>
                    <defs>
                        <marker id="Arrow1Mend" refX="0" refY="0" orient="auto" inkscape:stockid="Arrow1Mend" overflow="visible">
                            <path d="M-4,0 l-2,2 l7,-2 l-7,-2 l2,2 z" fill-rule="evenodd" stroke="#000" stroke-width="1pt" style="fill: none; stroke: none; stroke-dasharray: none;" id="svg_2">
                            </path>
                        </marker>
                    </defs>
                </svg>


                <div class="card-img">
                    <a href="#" data-toggle="modal" data-target="#mbr-popup-w"><span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span></a>
                </div>
                <div class="card-box m-auto">
                    <h4 class="card-title align-center pb-3 mbr-white mbr-bold mbr-fonts-style display-5">Derivaciones<br> y traslados</h4>
                    <h5 class="link align-center mbr-semibold mbr-white mbr-fonts-style display-4"><a href="#" class="text-white text-primary" data-toggle="modal" data-target="#mbr-popup-w">Ver más</a></h5>
                </div> --><a href="tel:45868809"><img src="assets/images/telefono_derivaciones500.jpg" class="media" width="500" height="" alt=""/></a></div>



        </div>

    </div>

</section>

<section class="team cid-shRjEAiZ19" id="team-1">

    

    
    
    
    
    
    
    <div class="container">
        <div class="row">
            
        
        
        <div class="card__wrap col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="image__card">
                        <img src="assets/images/foto1-300x314.jpg" alt="" title="">
                         <div class="card__info">
                            <h4 class="card__title mbr-fonts-style display-5">COVID 19</h4>
                            <p class="card__text mbr-fonts-style display-4"><a href="corona-info.php" class="text-white">Más información</a></p>
                        </div>
                    </div>
                    <div class="hover__socicon">
                        <div>
                              
                              
                              
                        <a href="#" target="_blank" class="icons__wrap">
                                <span class="mbr-iconfont mobi-mbri-info mobi-mbri" style="color: rgb(249, 244, 177); fill: rgb(249, 244, 177);"></span>
                          </a></div>
                    </div>
                </div>
          </div>
		  
		  
		  <div class="card__wrap col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="image__card">
                        <img src="assets/images/foto4-300x314.jpeg" alt="" title="">
                         <div class="card__info">
                            <h4 class="card__title mbr-fonts-style display-5">Doná Sangre</h4>
                            <p class="card__text mbr-fonts-style display-4"><a href="donar-sangre.php" class="text-white">más información</a></p>
                        </div>
                    </div>
                    <div class="hover__socicon">
                        <div>
                              
                              
                              
                        <a href="donar-sangre.php" class="icons__wrap">
                                <span class="mbr-iconfont mobi-mbri-info mobi-mbri" style="color: rgb(249, 244, 177); fill: rgb(249, 244, 177);"></span>
                          </a></div>
                    </div>
            </div>
            </div><div class="card__wrap col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="image__card">
                        <img src="assets/images/foto5-300x314.jpeg" alt="" title="">
                         <div class="card__info">
                            <h4 class="card__title mbr-fonts-style display-5">Vacunación</h4>
                            <p class="card__text mbr-fonts-style display-4"><a href="corona-antigripal.php" class="text-white">más información</a></p>
                        </div>
                    </div>
                    <div class="hover__socicon">
                        <div>
                              
                              
                              
                        <a href="corona-antigripal.php" class="icons__wrap">
                                <span class="mbr-iconfont mobi-mbri-info mobi-mbri" style="color: rgb(249, 244, 177); fill: rgb(249, 244, 177);"></span>
                          </a></div>
                    </div>
                </div>
            </div></div>
    </div>
</section>
<a name="links"></a>
<section class="extTeams cid-slJ8m3fOzE" id="extTeams5-h">

    

    
    
    <div class="container">
        <div class="row justify-content-center">
             <div class="col-12 col-md-12">
            <h2 class="maintitle pb-3 mbr-fonts-style display-2">Links de Interés</h2>
            </div>
            
            <div class="card p-3 col-12 col-md-8 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <div class="icons">
                        <a href="https://www.osssb.com" target="_blank"><span class="mbr-iconfont mbr-iconfont-social mobi-mbri-globe-2 mobi-mbri"></span></a>
                        <a href="#"></a>
                        <a href="#"></a>
                            </div>
                        <a href="http://www.osssb.com" target="_blank"><img src="assets/images/logo-osssb-200x100.jpg" alt="OSSSB"></a>
                    </div>
                    <div class="card-box">
                        
                          
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-8 col-lg-4">
                 <div class="card-wrapper">
                    <div class="card-img">
                       <div class="icons">
                        <a href="#"><span class="mbr-iconfont mbr-iconfont-social mobi-mbri-globe-2 mobi-mbri"></span></a>
                        <a href="#"></a>
                        <a href="#"></a>
                            </div>
                        <a href="https://www.anses.gob.ar" target="_blank"><img src="assets/images/logo-anses-200x100.jpg" alt="ANSES"></a>
                    </div>
                    <div class="card-box">
                        
                          
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-8 col-lg-4">
                 <div class="card-wrapper">
                    <div class="card-img">
                       <div class="icons">
                        <a href="https://www.argentina.gob.ar/sssalud" target="_blank"><span class="mbr-iconfont mbr-iconfont-social mobi-mbri-globe-2 mobi-mbri"></span></a>
                        <a href="#"></a>
                        <a href="#"></a>
                            </div>
                        <a href="https://www.argentina.gob.ar/sssalud" target="_blank"><img src="assets/images/logo-superintendencia-200x100.jpg" alt="SSS"></a>
                    </div>
                    <div class="card-box">
                        
                          
                    </div>
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
                              <p class="mbr-text mbr-regular mbr-fonts-style display-4">Lunes a viernes: 8:00 - 20:00 hs.<br>
                                Guardia 24 hs. <br>
                              Clínica Médica - Cardiología - Traumatología - Cirugía - Ginecología - Urología - Neurocirugía - Cirugía Cardiovascular.</p>
                            </div>
                        </div>


                    </div>


                    <div class="icons-wrap">
                        <div class="icon-wrap">
                            <span class="mbr-iconfont icon54-v1-medical-bag"></span>
                            <div class="text-wrap">
                              <h3 class="icon-title mbr-bold mbr-fonts-style display-7">Oftalmología:</h3>
                                <p class="mbr-text mbr-regular mbr-fonts-style display-4">Guardia: </p>
                                <p>Lunes a viernes de 8.00 a 17.00 hs.                                </p>
                                <p>Demanda de lentes:</p>
                              <p>Lunes a viernes de 10.30 a 12.00 hs.</p></div>
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
<?if(!$_SESSION["envio"]){?>
<!--Formbuilder Form-->
<form  method="POST" name="contacto" id="contacto" class="mbr-form form-with-styler" >

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
</form><!--Formbuilder Form-->
<?}else{?>
<h3 class="icon-title mbr-bold mbr-fonts-style display-7">Gracias por comunicarse con nosotros,<BR>en breve nos contactaremos con Ud.</h3>

<?}?>
</div>
        </div>
    </div>
</section>

<section class="map1 cid-slOw5wUSpT" id="map1-s">

     

    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCNveGQ9bfpKFwWzQLLftrR9hNiHwdqQG8&amp;q=policlinico bancario, caba, buenos aires, argentina" allowfullscreen=""></iframe></div>
</section>

<section class="form cid-rGtUn0OFxn" id="footer2-e"></section>

<section class="cid-rGtUo6gJTl" id="footer1-f">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2021
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
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/popup-plugin/script.js"></script>
  <script src="assets/popup-overlay-plugin/script.js"></script>
  <script src="assets/chatbutton/floating-wpp.js"></script>
  <script src="assets/chatbutton/script.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/formstyler/jquery.formstyler.js"></script>
  <script src="assets/formstyler/jquery.formstyler.min.js"></script>
  <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid.min.js"></script>
  <script src="assets/br-style/br-script.js?1"></script>
  <!-- <script src="assets/br-style/br-popup.css"></script> -->
  



  <script src="video/assets/playervimeo/vimeo_player.js"></script>
  <script src="video/assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="video/assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
      <script src="video/assets/theme/js/script.js"></script>

  
  
 <?include("inc/pie.php")?>
 </body>
</html>