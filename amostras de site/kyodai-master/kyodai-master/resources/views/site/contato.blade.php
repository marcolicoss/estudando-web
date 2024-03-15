<html>
@include('site.include.head')

<body>
@include('site.include.header')

<main>
    <section class="bg-section-header-site header-size-site  section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"></div>
            </div>
        </div>
    </section> <!-- bg-section-header-site header-size-site -->

    <section class="section-padding">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    @if(Session::has('enviar.contato'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Sucesso!</strong> Sua Mensagem foi enviada
                        </div>
                    @endif
                    <h2 class="text-center "><i class="linha-1">_____</i> Fale Conosco <i class="linha-1">_____</i></h2><br>
                </div>
            </div><br>
            <div class="row ">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center text-title-description">
                    <p class="">
                        Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                        Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                        Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                    </p>
                </div>
            </div> <!-- ./ row -->
        </div>
    </section>
    <!-- <div class="clearfix">...</div> -->
    <section class="bg-section-contato section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    {!! Form::open(['route' => 'site.contato.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                        <div class="input-group">
                            <span class="input-group-addon input-pink" id="basic-addon1">Nome *</span>
                            <input type="text" class="form-control" name="nome"  aria-describedby="basic-addon1" required>
                        </div><br><br>
                        
                        <div class="input-group">
                            <span class="input-group-addon input-pink" id="basic-addon1">Email *</span>
                            <input type="email" class="form-control" name="email"  aria-describedby="basic-addon1" required>
                        </div><br><br>
                        
                        <div class="input-group">
                            <span class="input-group-addon input-pink" id="basic-addon1">Assunto *</span>
                            <input type="text" class="form-control" name="assunto" aria-describedby="basic-addon1" required>
                        </div><br><br>
                        
                        <div class="input-group">
                            <span class="input-group-addon input-pink" id="basic-addon1">Mensagem *</span>
                            <textarea class="form-control" name="mensagem" rows="3" required></textarea>
                        </div><br>

                        <br><br>
                        {!! Form::submit('Enviar', ['class' => 'btn btn-lg input-pink right button']) !!}

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </section>

    @include('site.include.footer')
</main>
</body>
</html>