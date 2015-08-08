<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Business Casual - Start Bootstrap Theme</title>

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

=======
    <meta charset="UTF-8">
    <title>Bom Lugar Viagens - Contato</title>
>>>>>>> cc7d958dcac2a1d201eaaf7d55c8b0c80b68ce29
</head>

<body>
<<<<<<< HEAD

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
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{url('/')}}">Página Inicial</a>
                </li>
                <li>
                    <a href="{{url('sobre')}}">Sobre</a>
                </li>
                <li>
                    <a href="{{url('viagens')}}">Viagens</a>
                </li>
                <li>
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
                <h2 class="intro-text text-center">Contato
                    <strong>Bom Lugar Viagens</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.6096602394277!2d-43.174052899999985!3d-22.9645984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99800008b464a1%3A0x8cdba2a609abae7e!2sAv.+Princesa+Isabel%2C+7+-+Copacabana%2C+Rio+de+Janeiro+-+RJ%2C+22011-010!5e0!3m2!1spt-BR!2sbr!4v1438948236180" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <p>Telefone:
                    <strong>(21) 2542-5001</strong>
                </p>
                <p>Email:
                    <strong><a href="mailto:name@example.com">contato@bomlugarviagens.com</a></strong>
                </p>
                <p>Endereço:
                    <strong>Av. Princesa Isabel, 7
                        <br>Copacabana, RJ 22011-010</strong>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contato
                    <!--<strong></strong>-->
                </h2>
                <hr>
                <p>Preencha esse formulário com algumas informações importantes para entrar em contato com a nossa central de atendimento. Você pode usar esse espaço para solucionar suas dúvidas ou enviar sugestões para melhorarmos o nosso serviço.</p>
                <form role="form">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>Nome</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Telefone</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label>Mensagem</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
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
