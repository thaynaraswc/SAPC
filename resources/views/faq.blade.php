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
          <a class="nav-link" href="/">Voltar</a>
          @auth
            <a class="nav-link active"  href="{{ url('/home') }}"></a>
          @else
            <a class="nav-link" href="{{ route('login') }}">Entrar</a>
            <a class="nav-link" href="{{ route('register') }}">Criar conta</a>
            <a class="nav-link" href="/faq">Dúvidas frequentes</a>
            @endauth
          </nav>
        </div>
         @endif
      </header>

      <main >
      
        @include('layouts/faq')
       
      </main>

      @include('layouts/footer')