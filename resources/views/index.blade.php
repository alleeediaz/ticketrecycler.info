<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ticket Recycler</title>

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" href="{{ URL::asset('/css/ie10-viewport-bug-workaround.css') }}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset('/css/carousel.css') }}">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Ticket Recycler</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#about">Acerca</a></li>
                <li><a href="#contact">Contacto</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="http://searchengineland.com/figz/wp-content/seloads/2014/04/hotel-bell-customer-service-ss-1920.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Te fuiste de viaje</h1>
              <p>y ¿no utilizas tus tickets?</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="http://image.vanguardia.com.mx/sites/default/files/gasolina_15.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Tienes coche</h1>
              <p>pero ¿no utilizas tus ticket?</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="http://www.laculturaenpuebla.org/wp-content/uploads/2013/04/arrachera.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Comiste en un restaurante</h1>
              <p>y no requieres tu ticket</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="{{ URL::asset('/images/give-ticket.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>Tengo un ticket</h2>
          <!-- <p>Sí te fuiste a comer, cargaste tu tanque de gasolina ó simplemente tienes con un ticket que aun puede ser facturado, y deseas probar suerte. Haz clic aquí.</p> -->
          <p></p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ URL::asset('/images/get-ticket.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>Quiero un ticket</h2>
          <p>Sí te fuiste de comisión y olvidaste pedir tus tickets para comprobar tus gastos. Entonces necesitas un ticket que pueda ser facturado. Haz clic aquí.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ URL::asset('/images/help.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>¿Necesitas Ayuda?</h2>
          <p>¿Cómo funciona? Sí necesitas conocer más detalle del funcionamiento de nuestra App. Haz clic aquí.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">No los tires a la basura..  <span class="text-muted">mejor reciclalos!</span></h2>
          <p class="lead">&copy;Ticket Recycler es un novedoso sistema en Internet que ayuda a las personas a conseguir tickets para realizar su comprobación de gastos</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="{{ URL::asset('/images/ticket-recycler-slogan.png') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Tienes coche y <span class="text-muted"> ¿no utilizas tus ticket?</span></h2>
          <p class="lead">&copy;Ticket Recycler te invita a reciclar tus tickets de gasolina. Si eres uno más que compra gasolina para su coche y no utilizas los tickets depositalo en nuestro cesto, alguien más podria reutilizarlo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="{{ URL::asset('/images/fuel-ticket.png') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Comiste en un restaurante y <span class="text-muted"> no requieres tu ticket</span></h2>
          <p class="lead">No los tires a la basura, depositalo en &copy;Ticket Recycler y obten la oportunidad de recuperar dinero en efectivo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="{{ URL::asset('/images/food-ticket.png') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Ir arriba</a></p>
        <p>&copy; 2016 Ticket Recycler, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y Condiciones</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="{{ URL::asset('/js/ie10-viewport-bug-workaround.js') }}"></script>
    
  </body>
</html>
