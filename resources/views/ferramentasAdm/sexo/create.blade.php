@extends('layouts.app')

@extends('layouts/menu')

@section('content')

<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/show">Ferramenta de administrador</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/sexo/create">Cadastro de sexo</a></li>
        </ol>
    </nav>
</div>

<div style="margin-top: 5%" class="container">
    <div class="card">
        <h5 class="card-header text-center">Ferramentas do administrador</h5>
        <div class="card-body text-center">
            <form  method="POST" action="/ferramentasAdm/sexo/create" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group">
                    <label for="sexo">Nome</label>
                    <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Sexo ...">
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
            <table class="table table-hover  table-sm  text-center">

            <tr  class="bg-primary">
            <th scope="col">Código</th>
            <th scope="col">Descricao</th>
            </tr>
            @foreach($sexo as $s)
            <tr scope="row">
            <td>{{$s->id}}</td>

            <td>{{$s->descricao}}</td>

            </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection