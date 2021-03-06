<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first_website_with_bootstrapstudio</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="{{ URL::asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/Pretty-Footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="{{ URL::asset('image/logo.png') }}" id="logo"><strong>Jojo</strong> Tortas</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#">Cakes </a></li>
                    <li role="presentation"><a href="#">Precios </a></li>
                    <li role="presentation"><a href="#">Contactanos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="promo">
        <div class="jumbotron">
            <h1>¡Ofertas!</h1>
            <p>We have a special treat to our ner custoners. Order now and get a big discount on your first cake! </p>
            <p><a class="btn btn-info btn-lg" role="button" href="#">Get 50% Off!</a></p>
        </div>
    </div>
    <div class="container site-section" id="welcome">
        @yield('content')
        <h1>Welcome to Mom &amp; Pop's Bakery</h1>
        <p>Mom &amp; Pop's Bakery was founded in Paris in 1993 with the mission of giving great cake to the world. Our dedication and tasty cakes have won us numerous awards. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At explicabo dolore beatae,
            vel reiciendis amet enim. </p>
    </div>
    <div class="dark-section">
        <div class="container site-section" id="why">
            <h1>Why Choose Us </h1>
            <div class="row">
                <div class="col-md-4 item"><i class="fa fa-birthday-cake"></i>
                    <h2>Great Taste </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi non perferendis atque nemo assumenda ratione.</p>
                </div>
                <div class="col-md-4 item"><i class="fa fa-heart"></i>
                    <h2>Healthy &amp; Organic</h2>
                    <p> Quasi non perferendis atque nemo assumenda ratione. ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4 item"><i class="fa fa-shopping-basket"></i>
                    <h2>Next Day Delivery</h2>
                    <p>Lorem ipsum dolor sit amet quasi non perferendis atque nemo assumenda ratione consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container site-section" id="welcome">
        <h1>Gallery </h1>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="assets/img/desert-1.jpg" target="_blank" data-lightbox="cakes">
                        <img class="img-responsive" src="{{ URL::asset('image/desert-1.jpg') }}">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="assets/img/desert-2.jpg" target="_blank" data-lightbox="cakes">
                        <img class="img-responsive" src="{{ URL::asset('image/desert-2.jpg') }}">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="assets/img/desert-3.jpg" target="_blank" data-lightbox="cakes">
                        <img class="img-responsive" src="{{ URL::asset('image/desert-3.jpg') }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-navigation">
                    <h3><a href="#">Jojo tortas</a></h3>
                    <p class="links"><a href="#">Cakes </a><strong> · </strong><a href="#">Pricing </a><strong> · </strong><a href="#">Order </a><strong> </strong></p>
                    <p class="company-name">Jojo tortas © 2018 </p>
                </div>
                <div class="col-md-4 col-sm-6 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> +1 555 123456</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank">support@company.com</a></p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/lightbox-plus-jquery.min.js') }}"></script>
</body>
</html>