<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="img/logo_icon16.png">

        <title>Contact - Satellite Print Lab</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/main.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="brand"><a href="index.html"><img src="img/satlogo4.png"alt="Satellite Print Lab"style="max-width:100%;height:auto;"></a></div>
        <div class="address-bar">Austin, TX| 512.887.8920</div>
        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="index.html">Satellite Print Lab</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="apparel.html">Apparel</a>
                        </li>
                        <li>
                            <a href="decals.html">Decals and Stickers</a>
                        </li>
                        <li>
                            <a href="banners.html">Banners</a>
                        </li>
                        <li>
                            <a href="websites.html">Websites</a>
                        </li>
                        
                         <li>
                            <a class="soc-icon" href="https://www.facebook.com/satelliteprintlab" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a class="soc-icon" href="https://www.instagram.com/satelliteprintlab" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Contact
                        <strong>Satellite Print Lab</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-md-8">
                        <p>If you'd like to reach out to us with questions, comments, or concerns, please fill out the from below. We will contact you as soon as we can!</p>
                        <form action="email.php" method="post" role="form">
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>Phone Number</label>
                                    <input type="tel" class="form-control" name="phone">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-lg-12">
                                    <label>Message</label>
                                    <textarea class="form-control" rows="6" name="message"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="hidden" name="save" value="contact">
                                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <p>Phone:
                            <strong>512.887.8920</strong>
                        </p>
                        <p>Email:
                            <strong><a href="mailto:info@satelliteprintlab.com" target="_blank">info@satelliteprintlab.com</a></strong>
                        </p>
                        <p>Hecho en:
                            <strong>  Austin, Texas</strong>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- /.container -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy; Satellite Print Lab 2015</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>