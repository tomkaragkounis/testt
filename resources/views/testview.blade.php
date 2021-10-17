<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Developer">
    <meta name="author" content="">
    <meta name="keywords" content="tomkaragounis, tom karagounis, tomkaragkounis, Θωμάς Καραγκούνης, Θωμας Καραγκουνης">
    <link rel="icon" 
      type="image/png" 
      href="../public/images/glasses.png" />

    <title>TOM || Web Developer</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Tom Karagounis</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">WELCOME</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - SEO Expert - Social Media Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            
            <div class="row">
            
            @if ($projects==null)
            mpla mpla

            @else
            @foreach ($projects as $project)
    
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal{{ $project->id }}" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ url('storage/'.$project->image) }}" class="img-responsive" alt="">
                    </a>
                </div>
                @endforeach
    @endif
    </div></div>
        </section>    
             <!-- Portfolio Modals -->
             @foreach ($projects as $project)
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $project->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>{{ $project->name }}</h2>
                            <hr class="hyphen SA-primary">
                            <img src="{{ url('storage/'.$project->image) }}" class="img-responsive img-centered" alt="">
                            <p>{{ $project->description }}</br><center><strong> <a href="{{ $project->link }}" target="_blank">{{ $project->name }}</a></strong></center></p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong>{{ $project->client }}
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>{{ $project->date }}
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong>{{ $project->tags }}
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
    
   
             
        
    
    
   
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Hello! My name is <strong>Tom</strong> and I am from Greece. I have been involved in the Informatics and the Web field for as long as I can remember myself. </p>
                </div>
                <div class="col-lg-4">
                    <p>I have a passion for innovating Media Marketing, Web Developing and designing High Level strategies for companies who want to flourish.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="../public/pdf/Tom_Karagkounis.pdf" class="btn btn-lg btn-outline" target="_blank">
                        <i class="fa fa-download"></i> -CV-
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form method="post" action="/submitmail" id="contactForm" >
                        @csrf
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message" ></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>dont hack me captain tardo</li>
                                @endforeach
                            </ul>
                        </div>
                                @endif
                        
                        <div id="success">
                            @if (session()->has('messagef'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! session()->get('messagef') !!}</li>
                                    </ul>
                                </div>
                            @endif
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Greece Thessaloniki<br>Evosmos, 56224</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/tomkaragouniscom-114360142447182/" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/thefreefreak/" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/tomkaragounis" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                                                        <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin" target="_blank"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/110312867046527825944" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>MORE INFO</h3>
                        <p>Send me an email <strong>tomkaragounis@gmail.com</strong>. Or just give me a call at <a href="tel:6955990751">6955990751</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; TomKaragounis 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    

    <!-- jQuery -->
    <script src="../public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../public/js/classie.js"></script>
    <script src="../public/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../public/js/jqBootstrapValidation.js"></script>
    <!--<script src="../public/js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="../public/js/freelancer.js"></script>

</body>

</html>
