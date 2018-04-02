@extends('layouts.app')

@extends('layouts/menu')

@section('content')

<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/show">Ferramentas Administrativas</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/FinalidadeAlvara/create">Finalidade Alvará</a></li>
        </ol>
    </nav>
</div>

<div style="margin-top: 5%" class="container">
    <div class="card">
        <h5 class="card-header text-center">Ferramentas do administrador</h5>
        <div class="card-body text-center">
            <form  method="POST" action="/ferramentasAdm/FinalidadeAlvara/create" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nomeFinalidadeAlvara">Nome</label>
                            <input type="text" class="form-control" id="nomeFinalidadeAlvara"  name="nomeFinalidadeAlvara" placeholder="Nome finalidade">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="valorFinalidadeAlvara">Valor</label>
                            <input type="text" class="form-control" id="valorFinalidadeAlvara" name="valorFinalidadeAlvara" placeholder="Valor finalidade">
                        </div>
                    </div>
                </div>   
                
                <div class="form-group">
                    <label for="descricaoFinalidadeAlvara">Descrição da finalidade</label>
                    <input type="text" class="form-control" id="descricaoFinalidadeAlvara" name="descricaoFinalidadeAlvara" placeholder="Descrição finalidade">
                </div>

               
                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                
            </form>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 5%">
    <div class="card">
        <h5 class="card-header text-center">Já cadastradas</h5>
        <div class="card-body text-center">
            <table class="table table-hover  table-sm text-center">

            <tr  class="bg-primary">
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Descricao</th>
            <th scope="col">Valor (R$)</th>
            <th scope="col">Opções</th>
            </tr>
            @foreach($finAlvara as $fin)
            <tr scope="row">
            <td>{{$fin->id}}</td>

            <td>{{$fin->nome}}</td>
            <td>{{$fin->descricao}}</td>
            <td>{{$fin->valor}}</td>
            <td>
                <form action="/ferramentasAdm/FinalidadeAlvara/{{$fin->id}}" method="POST">
                        {{ csrf_field() }}
                        
                    <a href="/ferramentasAdm/FinalidadeAlvara/{{$fin->id}}/edit" >
                    Editar</a>
                    
                </form>
            </td>

            </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection