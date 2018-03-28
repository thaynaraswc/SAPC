@extends('layouts.app')

@extends('layouts/menu')

@section('content')

<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/show">Ferramentas Administrativas</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/FinalidadeAlvara/create">Editar finalidade Alvará</a></li>
        </ol>
    </nav>
</div>

<div style="margin-top: 5%" class="container">
    <div class="card">
        <h5 class="card-header text-center">Editar finalidade</h5>
        <div class="card-body text-center">
            <form  method="POST" method="POST" action="/ferramentasAdm/FinalidadeAlvara/{{$finAlvara->id}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ method_field( 'PUT') }}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nomeFinalidadeAlvara">Nome</label>
                            <input type="text" class="form-control" id="nomeFinalidadeAlvara"  name="nomeFinalidadeAlvara" value="{{ $finAlvara->nome }}">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="valorFinalidadeAlvara">Valor</label>
                            <input type="text" class="form-control" id="valorFinalidadeAlvara" name="valorFinalidadeAlvara" value="{{ $finAlvara->valor }}">
                        </div>
                    </div>
                </div>   
                
                <div class="form-group">
                    <label for="descricaoFinalidadeAlvara">Descrição da finalidade</label>
                    <input type="text" class="form-control" id="descricaoFinalidadeAlvara" name="descricaoFinalidadeAlvara" value="{{ $finAlvara->descricao }}">
                </div>

               
                    <button type="submit" class="btn btn-primary btn-lg">Editar</button>
                
            </form>
        </div>
    </div>
</div>

@endsection