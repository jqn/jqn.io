<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Full Stack Developer with MEAN skills | Denver | Seattle">
    <meta name="author" content="Joaquin Guardado">
    <meta name="keywords" content="Joaquin Guardado, Colorado Springs, Drupal, developer, LAMP, Angular, Node, MEAN">

    <title>jQN | Full Stack Developer | UI Designer | CG Artist | Iphone Photographer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/jqn-portfolio.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">jQN.io</a>
            </li>
            <li>
              <a href="#top">Intro</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Joaquin Guardado</h1>
            <h3>Full Stack Developer - UI Designer - CG Artist</h3>
            <br>
            <ul class="list-inline">
              <li>
                <a href="https://github.com/jqn" target="_blank"><i class="fa fa-github fa-fw fa-4x"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/joaquinguardado/" target="_blank"><i class="fa fa-linkedin-square fa-fw fa-4x"></i></a>
              </li>
              <li>
                <a href="#contact"><i class="fa fa-envelope-square fa-fw fa-4x"></i></a>
              </li>
            </ul>
            <hr>
            <br>
            <div class="scroll-down">
              <a class="btn btn-circle" href="#contact"><i class="fa fa-angle-down fa-fw"></i></a>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
      <div class="contact-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h1>Get In Touch</h1>
            </div>
            <br>
            <br>
          </div>
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls text-left">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls text-left">
                    <label>Email Address</label>
                    <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls text-left">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls text-left">
                    <label>Message</label>
                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-success btn-lg btn-lg">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>
          JQN.io 2014
        </p>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact-me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/floatlabel.js"></script>

    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
