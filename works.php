<?php

$PageTitle = "Our recente works";

function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->
<?php }

include "header.php";
include 'navigation.php';


?>

<!--works -->

    <div class="container">
        <div class="row">
            <h1 class="sans-serifs">OUR RECENT WORKS</h1>
            <div class="wd-margin-t30"></div>
            <div class="projects uk-grid">
                <a href="projects/evydent/sample-project.php" class="uk-width-1-4">
                    <div class="web-card ">
                        <img src="images/where-design-is.png" alt="" class="img-responsive" />
                        <div class="name">
                            <h1 class="project-name">Project X</h1>
                            <h4 class="project-desc">Movie poster</h4>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
    <div class="wd-margin-b30"></div>


<?php

include 'footer.php';

?>