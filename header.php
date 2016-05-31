<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- http://getbootstrap.com/customize/?id=f93c336902a173aa3341 -->
    <title> <?= isset($PageTitle) ? $PageTitle : "Where Design is everything you need"?> </title>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= isset($UIKIT) ? $UIKIT : 'css/uikit.min.css'?>" >
    <link href="<?= isset($BOOTSTRAP) ? $BOOTSTRAP : 'css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?= isset ($BOOTSTRAPMIN) ? $BOOTSTRAPMIN :'css/bootstrap-theme.min.css'?>" rel="stylesheet">
    <link href="<?= isset ($STYLECSS) ? $STYLECSS :'css/style.css'?>" rel="stylesheet">
    <link href="<?= isset ($ANIMATE) ? $ANIMATE :'css/animate.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= isset($WHEREDESIGNCSS) ? $WHEREDESIGNCSS : 'wheredesign.css'?>">

    <script src="<?= isset($JQUERY) ? $JQUERY : 'js/jquery.js'?>"></script>
    <script src="<?= isset($PLUGINS) ? $PLUGINS : 'js/plugins.js'?>"></script>
    <script src="https://use.fontawesome.com/1c3526424e.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php if (function_exists('customPageHeader')){
        customPageHeader();
    }?>

</head>
<body>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-74371827-1', 'auto');
    ga('send', 'pageview');

</script>