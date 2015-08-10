<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sobre - Bom Lugar Viagens</title>

    <!-- Bootstrap Core CSS -->
    <link href={{asset("css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom CSS -->
    <link href={{asset("css/business-casual.css")}} rel="stylesheet">

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
            <a class="navbar-brand" href="index.html">Bom Lugar Viagens</a>
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
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Sobre a
                    <strong>Bom Lugar Viagens</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-border-left" src={{asset("img/slide-2.jpg")}} alt="">
            </div>
            <div class="col-md-6">
                <p>O site Bom Lugar Viagens foi desenvolvido para proporcionar mais comodidade e conforto quando você ou sua família precisarem viajar.</p>
                <p>Usar o site é muito simples: assim que se registrar no site, você entrará na aba Viagens e marcar a viagem que mais o interessa. O dono da agência entrará em contato com você para a contratação da viagem.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Nossa
                    <strong>Equipe</strong>
                </h2>
                <hr>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src={{asset("img/joaop1.jpg")}} alt="">
                <h3>João Praieiro
                    <small>Empreendedor</small>
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src={{asset("img/joaop2.jpg")}} alt="">
                <h3>João Praieiro
                    <small>Proprietário</small>
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src={{asset("img/joaop3.jpg")}} alt="">
                <h3>João Praieiro
                    <small>CEO</small>
                </h3>
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
                <p>© 1990 - 2015 | Empresa Júnior de Consultoria e Desenvolvimento Web</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src={{asset("js/jquery.js")}}></script>

<!-- Bootstrap Core JavaScript -->
<script src={{asset("js/bootstrap.min.js")}}></script>

</body>

</html>
