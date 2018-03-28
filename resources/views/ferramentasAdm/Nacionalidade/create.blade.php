@extends('layouts.app')

@extends('layouts/menu')

@section('content')

<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/show">Ferramenta de administrador</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/Nacionalidade/create">Cadastro de nacionalidade</a></li>
        </ol>
    </nav>
</div>

<div style="margin-top: 5%" class="container">
    <div class="card">
        <h5 class="card-header text-center">Ferramentas do administrador</h5>
        <div class="card-body text-center">
            <form  method="POST" action="/ferramentasAdm/Nacionalidade/create" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group">
                    <label for="nomeNacionalidade">Nome</label>
                    <input type="text" class="form-control" id="nomeNacionalidade" name="nomeNacionalidade" placeholder="Nacionalidade ...">
                </div>

               
                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                
            </form>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 5%">
    <div class="card">
        <h5 class="card-header text-center">Nacionalidades já cadastradas</h5>
        <div class="card-body text-center">
            <table class="table table-hover  table-sm  text-center">

            <tr  class="bg-primary">
            <th scope="col">Código</th>
            <th scope="col">Descricao</th>
            </tr>
            @foreach($nacionalidade as $nac)
            <tr scope="row">
            <td>{{$nac->id}}</td>

            <td>{{$nac->descricao}}</td>

            </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection