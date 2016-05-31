<nav class="navbar navbar-default uk-navbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="col-sm-12 col-lg-3">
                <a class="navbar-brand center-block" href="<?= isset($HOME) ? $HOME : 'index.php'?>">
                    <img alt="Brand" src="<?= isset($LOGO) ? $LOGO : 'images/logo.png'?>">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="row">
                <div class="pull-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown" data-uk-dropdown>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Studio <span class="caret"></span></a>
                            <ul class="dropdown-menu wd-dropdown uk-dropdown-navbar" >
                                <li><a href="#">YOUR BRAND</a></li>
                                <li><a href="#">YOUR WEBSITE</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= isset($WORKS) ? $WORKS : 'works.php'?>">Works</a></li>
                        <li><a href="<?= isset($INSPIRO) ? $INSPIRO: 'inspiration.php'?>">Inspiraton</a></li>
                        <li><a href="<?= isset($BLOG) ? $BLOG : 'Blog.php'?>">Blog</a></li>
                        <li><a href="<?= isset($CONTACT) ? $CONTACT : 'Contact.php'?>">Contact</a></li>
                        <li><a href="<?= isset($ABOUT) ? $ABOUT : 'About.php'?>">About</a></li>
                    </ul>
                </div>

            </div>

        </div>


    </div><!-- /.container-fluid -->
</nav>