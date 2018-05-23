@extends('layouts.app')

@extends('layouts/menu')

@section('content')

<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="/registroOpcoes/show">Registro</a></li>
            <li class="breadcrumb-item"><a href="/registroPessoa/create">Registro de Pessoa</a></li>
            
        </ol>
    </nav>
</div>


<div style="margin-top: 5%" class="container">
    <div class="card">
        <h5 class="card-header text-center">Opções de registro</h5>
        <div class="card-body text-center">
            <a href="/registroPessoa/create">
                <button type="button" class="btn btn-primary btn-lg">Cadastro de pessoa</button>
            </a>

            <a href="/registroEmpresa/create">
                <button type="button" class="btn btn-primary btn-lg">Cadastro de empresa</button>
            </a>

        </div>
    </div>
</div>

<div class="container" style="margin-top: 5%">
    <div class="card">
        <h5 class="card-header text-center">Pessoas já cadastradas</h5>
        <div class="card-body text-center">
            <table class="table table-hover  table-sm  ">

            <tr  class="bg-primary">
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Data Nascimento</th>
            <th>Opções</th>
            </tr>
            @foreach($registroPessoa as $rp)
            <tr scope="row">
            <td>{{$rp->id}}</td>

            <td>{{$rp->nomePessoa}}</td>
            <td>{{$rp->dataNascimento}}</td>
            <td>
                <form action="/ferramentasAdm/ProfissaoPessoa/{{$rp->id}}" method="POST">
                        {{ csrf_field() }}
                        
                    <a href="/ferramentasAdm/ProfissaoPessoa/{{$rp->id}}/edit" >
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
    @section('js')
    
   
    <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
    <script src="js/regioes.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection

    </body>
    </html>



