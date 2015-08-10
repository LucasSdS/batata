<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Página Inicial - Bom Lugar Viagens</title>

    <!-- Sign In css -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href={{asset("css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom CSS -->
    <link href={{asset("css/business-casual.css")}} rel="stylesheet">
    <link href={{asset("css/csscustom.css")}} rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src={{asset("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js")}}></script>
    <script src={{asset("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js")}}></script>
    <![endif]-->

</head>

<body>

<div class="brand">Bom Lugar Viagens</div>
<div class="address-bar">Av. Princesa Isabel, 7 | Copacabana, RJ 22011-010 | (21) 2542-5001</div>

        <div class="container">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#ModalLogin">Sign Up or Sign In</button>

            <!-- Modal -->
            <div class="modal fade" id="ModalLogin" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Login</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container row">
                                <div class="col-sm-2 col-md-2 col-xs-2 col-lg-1"></div>
                                <form class="form-signin col-sm-10 col-md-10 col-xs-10 col-lg-10">
                                    <label for="inputEmail" class="sr-only">Email</label>
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                                    <label for="inputPassword" class="sr-only">Senha</label>
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="remember-me"> Remember me
                                        </label>
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                                    <a href="#">Ainda não é cadastrado? Cadastre-se</a>
                                </form>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Menu mobile -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="/">Bom Lugar Viagens</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse row" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="col-sm-12 col-xs-12 col-md-3"> <!-- Colocar as rows, começar da menor -->
                    <a href="{{url('/')}}">Página Inicial</a>
                </li>
                <li class="col-sm-12 col-xs-12 col-md-3">
                    <a href="{{url('sobre')}}">Sobre</a>
                </li>
                <li class="col-sm-12 col-xs-12 col-md-3">
                    <a href="{{url('viagens')}}">Viagens</a>
                </li>
                <li class="col-sm-12 col-xs-12 col-md-3">
                    <a href="{{url('contato')}}">Contato</a>
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
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src={{asset("img/slide-1.jpg")}} alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src={{asset("img/slide-2.jpg")}} alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src={{asset("img/slide-3.jpg")}} alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Welcome To</small>
                </h2>
                <h1 class="brand-name">Bom Lugar Viagens</h1>
                <hr class="tagline-divider">
                <h2>
                    <small>Por
                        <strong>João Praieiro</strong>
                    </small>
                </h2>
            </div>
        </div>
    </div>

    <!-- aqui ficava o div1 e div2 -->

</div>
<!-- /.container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>© 1990 - 2015 | Empresa Júnior de Consultoria e Desenvolvimento Web</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src={{asset("js/jquery.js")}}></script>

<!-- Bootstrap Core JavaScript -->
<script src={{asset("js/bootstrap.min.js")}}></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>
<!-- Sign In-->

</body>

</html>
