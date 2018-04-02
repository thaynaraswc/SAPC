<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/home.css">
        <title>SAPC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    @if (Route::has('login'))
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">SAPC </h3>
          <nav class="nav nav-masthead justify-content-center">
          @auth
            <a class="nav-link active"  href="{{ url('/home') }}">Início</a>
            <a class="nav-link" href="/faq">Dúvidas frequentes</a>
          @else
            <a class="nav-link" href="{{ route('login') }}">Entrar</a>
            <a class="nav-link" href="{{ route('register') }}">Criar conta</a>
            <a class="nav-link" href="/faq">Dúvidas frequentes</a>
            @endauth
          </nav>
        </div>
         @endif
      </header>

      <main role="main" class="inner cover">
        <img src="img/bto.png" width="30%" height="30%">
        <h1 class="cover-heading">SAPC - Sistema de alvará da Polícia Civil</h1>
        <p class="lead">
        Os interessados na obtenção de qualquer alvará deverão se dirigir à Gerência, munidos com a documentação para a abertura do processo e da taxa que deverá ser impressa através do site da Secretaria da Fazenda do Estado do Tocantins.</p>
        <p class="lead">

            <button class="btn btn-lg btn-secondary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Mais informações</button>
          
        </p>
      </main>
        <!-- modal de informações -->
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="color: #000;">Informações de contato</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="color:#000; text-align: left;">
                <p>Delegado(a): DPC Antonio Gonçalves de Carvalho Neto</p>
                <p>Telefone(s): (63) 3218-6811</p>
                <p>Email: costumes@ssp.to.gov.br</p>
                <p>Endereço: Complexo II de Delegacias Especializadas -
                 Av. Teotônio Segurado, Qd. 202 sul, Conj.01, Lt.04 - Centro</p>
                 <p style="text-align: center">Palmas - Tocantins</p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                
              </div>
            </div>
        </div>
    </div>

      @include('layouts/footer')
