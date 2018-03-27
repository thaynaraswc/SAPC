@extends('layouts.app')

@extends('layouts/menu')

@section('content')

<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/ProfissaoPessoa/create">Ferramenta de administrador</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/ProfissaoPessoa/create">Cadastro de profissão</a></li>
        </ol>
    </nav>
</div>

<div style="margin-top: 5%" class="container">
    <div class="card">
        <h5 class="card-header text-center">Ferramentas do administrador</h5>
        <div class="card-body text-center">
            <form  method="POST" action="/ferramentasAdm/ProfissaoPessoa/create" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group">
                    <label for="nomeProfissao">Nome</label>
                    <input type="text" class="form-control" id="nomeProfissao" name="nomeProfissao" placeholder="Profissão ...">
                </div>

               
                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                
            </form>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 5%">
    <div class="card">
        <h5 class="card-header text-center">Profissões já cadastradas</h5>
        <div class="card-body text-center">
            <table class="table table-hover  table-sm table-dark text-center">

            <tr  class="bg-primary">
            <th scope="col">Id</th>
            <th scope="col">Descricao</th>
            </tr>
            @foreach($prof as $p)
            <tr scope="row">
            <td>{{$p->id}}</td>

            <td>{{$p->descricao}}</td>

            </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection