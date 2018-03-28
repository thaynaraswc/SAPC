@extends('layouts.app')

@extends('layouts/menu')

@section('content')

<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/show">Ferramentas administrativas</a></li>
        </ol>
    </nav>
    </div>

    <div style="margin-top: 5%" class="container">
        <div class="card">
            <h5 class="card-header text-center">Ferramentas do administrador</h5>
            <div class="card-body text-center">
                <a href="/registroPessoa/create">
                    <button type="button" class="btn btn-primary btn-lg">Escolaridade</button>
                </a>

                <a href="/ferramentasAdm/Nacionalidade/create">
                    <button type="button" class="btn btn-primary btn-lg">Nacionalidade</button>
                </a>

                <a href="/registroEmpresa/create">
                    <button type="button" class="btn btn-primary btn-lg">Estado civil</button>
                </a>

                <a href="/registroEmpresa/create">
                    <button type="button" class="btn btn-primary btn-lg">Sexo</button>
                </a>

                <a href="/ferramentasAdm/ProfissaoPessoa/create">
                    <button type="button" class="btn btn-primary btn-lg">Profissão</button>
                </a>

                <a href="/ferramentasAdm/FinalidadeAlvara/create">
                    <button type="button" class="btn btn-primary btn-lg">Finalidade Alvará</button>
                </a>
    

            </div>
        </div>
    </div>









@endsection