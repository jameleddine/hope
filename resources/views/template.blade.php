<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hope</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        {!! Html::style('flat-ui/bootstrap/css/bootstrap.css') !!}
        {!! Html::style('flat-ui/css/flat-ui.css') !!}
        {!! Html::style('common-files/css/icon-font.css') !!}
        {!! Html::style('assets/css/style.css') !!}
        <link href="assets/css/demo.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.ico">
        <!--FireBase bibliothèque-->
        <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
        @yield('js')
          <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>

    </head>

    <body>
        <div class="page-wrapper">
            <!-- header-11 -->
            <header class="header-11">
                <div class="container">
                    <div class="row">
                        <div class="navbar col-sm-12" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle"></button>
                                <a class="brand" href="#"><img src="img/logo@2x.png" width="50" height="50" alt=""> HOPE</a>
                            </div>
                            <div class="collapse navbar-collapse pull-right">
                                <ul class="nav pull-left">
                                    <li class="active"><a href="#">HOME</a></li>
                                    <li><a href="#">COMPANY</a></li>
                                    <li><a href="#">ABOUT US</a></li>
                                    <li><a href="#">BLOG</a></li>
                                    <li><a href="#">CONTACT</a></li>
                                </ul>
                                <form class="navbar-form pull-left">
                                    <a class="btn btn-primary" href="#">SIGN IN</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
             @yield('first')
            <!--
            
            -->
          

            
            <!-- content-13  
            

            <!-- footer-2 -->
            <footer class="footer-2 bg-midnight-blue">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li class="active">
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Company</a>
                            </li>
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-btns pull-right">
                        <a href="#"><div class="fui-vimeo"></div><div class="fui-vimeo"></div></a>
                        <a href="#"><div class="fui-facebook"></div><div class="fui-facebook"></div></a>
                        <a href="#"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>
                    </div>
                    <div class="additional-links">
                        Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </footer>
        </div>


 <script>
var myDataRef = new Firebase('https://mtbdobklma5.firebaseio-demo.com/');
    </script>

        <!-- Placed at the end of the document so the pages load faster -->
      <script src="common-files/js/jquery-1.10.2.min.js"></script>
        <script src="flat-ui/js/bootstrap.min.js"></script>
        <script src="common-files/js/modernizr.custom.js"></script>
        <script src="common-files/js/startup-kit.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>