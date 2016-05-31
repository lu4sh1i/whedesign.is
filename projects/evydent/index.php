<?php

$PageTitle= "Clinica EvyDent";

function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->
<?php }

$dots = "../../";
$CSS = "css/";
$JS = "js/";

$UIKIT = $dots . $CSS . "uikit.min.css";
$BOOTSTRAP = $dots . $CSS . "bootstrap.css";
$BOOTSTRAPMIN = $dots . $CSS . "bootstrap.min.css";
$WHEREDESIGNCSS = $dots  . "wheredesign.css";
$ANIMATE = $dots . $CSS . "animate.css";
$HOME = $dots . "index.php";

$LOGO = $dots . "images/logo.png";
$FOOTERLOGO = $dots . "images/logo_grayscale_text.png";

$UIKITJS = $dots . $JS . "uikit.min.js";
$JQUERY = $dots . $JS . "jquery.js";
$BOOTSTRAPMINJS = $dots . $JS . "bootstrap.min.js";
$PARALLAXJS = $dots . $JS . "parallax.min.js";

include "../../header.php";
include '../../navigation.php';

?>

<div class="wd-container">
    <div class="project-img evydent">

        <div class="content-0"></div>
        <div class="content-0"></div>

    </div>
    <div class="container-fluid">
        <div class="wd-margin-t-140">
            <div class="project-title inner wd-lg-box-shadow" data-uk-parallax="{'y:-200'}">
                <div class="container">
                    <div class="col-xs-12 col-xm-12 col-md-12 col-lg-8">
                        <h1 class="serifs large bold">Clinica EvyDent</h1>
                        <p class="subtitle">Dental Clinic based in Bucharest</p>

                    </div>
                    <div class="col-xs-12 col-xm-12 col-md-12 col-lg-4">
                        <div class="">
                            <h5 class="sans-serifs text-uppercase">Project link:</h5>
                           <a href="http://clinica-evydent.ro" target="_blank">http://clinica-evydent.ro</a>
                          <h5 class="sans-serifs text-uppercase">Services:</h5>
                          <p class="text-muted">Branding / Website Design / Website Development / Print Design</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="wd-margin-t30">
        <div class="showcase" >
            <div class="container">
                <div class="inner">
                    <div class="col-lg-12">
                        <div class="" data-uk-parallax="scale:1.2">
                            <img src="evydent-showcase.jpg" alt="Clinica EvyDent" class="img-responsive">
                        </div>
                    </div>
                </div>
               <div class="inner" data-uk-parallax="y:100">
                    <div class="col-lg-6">
                        <img src="evydent.jpg" alt="Logo Evydent">
                    </div>
                    <div class="col-lg-6">
                        <img src="madeof/basic-shapes.png" alt="Basic Shapes">
                    </div>
               </div>
            </div>
        </div>
    </div>


</div>




<div class="content-0"></div>

<?php

include '../../footer.php';

?>