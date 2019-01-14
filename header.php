<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Clean Blog</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php bloginfo("template_url") ?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php bloginfo("template_url") ?>/css/clean-blog.min.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"
        rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file://
        -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://dev-demo5940.pantheonsite.io">Start Bootstrap</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <!--div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"-->
				<div class="navbar-collapse collapse navbar-right">
						  <?php
						   wp_nav_menu(array(
							  'menu'              => 'primary',
							  'theme_location'    => 'primary',
							  'depth'             => 2,
							  'container'         => 'div',
							  'container_class'   => 'collapse navbar-collapse',
							  'container_id'      => 'bs-example-navbar-collapse-1',
							  'menu_class'        => 'nav navbar-nav',
							  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							  'walker'            => new wp_bootstrap_navwalker())
						   );
						  ?>
					</div><!--/.nav-collapse -->
					
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>