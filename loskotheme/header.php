<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - losko</title>
    <?php wp_head(); ?>

</head>
<body class="customize-partial-edit-shortcuts-shown custom-background">
    <header class="container-fluid">
        <nav class="navbar navbar-default <!--navbar-fixed-top-->">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-brand-my" href="home">Losko</a>
                </div>
                <div class="collapse navbar-collapse" id="main-nav">
                    <?php wp_nav_menu(array(
                            'theme_location'=>'primary',
                            'container' => false,
                            'menu_class' => 'nav navbar-nav navbar-right main-nav-ul'
                            )
                        );
                    ?>
                </div>
            </div>
        </nav>
       <!-- <div class="container-fluid">
            <img alt="" src="<?php /*header_image(); */?>" width="100%" height="<?php /*echo get_custom_header()->height; */?>" />
        </div>-->
    </header>
    <?php /*wp_nav_menu(array('theme_location'=>'primary')); */?>