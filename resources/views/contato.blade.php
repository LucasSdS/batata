@extends('template.base')
@section('titulo', 'Enviar Form Contato')

@section('conteudo')

@include('template.menu')

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

@include('template.footer')