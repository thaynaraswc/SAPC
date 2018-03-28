@extends('layouts.app')

@extends('layouts/menu')

@section('content')

<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/show">Ferramentas Administrativas</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/ProfissaoPessoa/create">Editar profissão</a></li>
        </ol>
    </nav>
</div>

<div style="margin-top: 5%" class="container">
    <div class="card">
        <h5 class="card-header text-center">Editar profissão</h5>
        <div class="card-body text-center">
            <form  method="POST" action="/ferramentasAdm/ProfissaoPessoa/{{$prof->id}}" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ method_field( 'PUT') }}
                <div class="form-group">
                    <label for="nomeProfissao">Nome</label>
                    <input type="text" class="form-control" id="nomeProfissao" name="nomeProfissao"   value="{{ $prof->descricao }}" placeholder="Profissão ...">
                </div>

               
                    <button type="submit" class="btn btn-primary btn-lg">Editar</button>
                
            </form>
        </div>
    </div>
</div>

@endsection