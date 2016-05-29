<?php

$PageTitle = "Clinica EvyDent";

function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->
<?php }

$dots = "../../css/";


$UIKIT = "uikit.css.min" . $dots;
$BOOTSTRAP = "bootstrap.css" . $dots;
$BOOTSTRAPMIN = "bootstrap.min.css" . $dots;



include "../../header.php";
include '../../navigation.html';


?>

<div class="wd-container">
    <div class="project-img evydent" data-uk-parallax="{bg: '-500'}">

        <div class="content-0"></div>
        <div class="content-0"></div>

    </div>
    <div class="container">
        <div class="wd-margin-t-140" data-uk-parallax="{y: '-300', opacity:'0'}">
            <div class="project-title inner ">
                <h1 class="serifs large bold">This is the project title</h1>
                <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut culpa distinctio dolorem eum nihil optio porro praesentium ratione reiciendis rem.</p>
            </div>
        </div>
    </div>
    <div class="wd-margin-t30">
        <div class="col-lg-6">
            <div class="">
                <img src="http://placehold.it/800x400" alt="placeholder">
                <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi assumenda expedita hic id ipsa ipsum labore laudantium natus? Est expedita facilis, neque nulla officia voluptate! Accusantium deleniti molestias non quas, quidem quo repellat. Consectetur enim eum explicabo illum incidunt nisi nulla odio optio reprehenderit voluptatum. Distinctio laborum modi molestias.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="">
                <img src="http://placehold.it/800x400" alt="placeholder">
                <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi assumenda expedita hic id ipsa ipsum labore laudantium natus? Est expedita facilis, neque nulla officia voluptate! Accusantium deleniti molestias non quas, quidem quo repellat. Consectetur enim eum explicabo illum incidunt nisi nulla odio optio reprehenderit voluptatum. Distinctio laborum modi molestias.</p>
            </div>
        </div>
    </div>
    <div class="content-0"></div>
    <div class="content-0"></div>
    <div class="content-0"></div>
    <div class="content-0"></div>

</div>




<div class="wd-margin-b30"></div>


<?php

include '../../footer.html';

?>