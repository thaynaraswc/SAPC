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
                <a href="/ferramentasAdm/grauEscolaridade/create">
                    <button type="button" class="btn btn-success btn-lg">Escolaridade</button>
                </a>

                <a href="/ferramentasAdm/Nacionalidade/create">
                    <button type="button" class="btn btn-success btn-lg">Nacionalidade</button>
                </a>

                <a href="/ferramentasAdm/estadoCivil/create">
                    <button type="button" class="btn btn-success btn-lg">Estado civil</button>
                </a>

                <a href="/ferramentasAdm/sexo/create">
                    <button type="button" class="btn btn-success btn-lg">Sexo</button>
                </a>

                <a href="/ferramentasAdm/ProfissaoPessoa/create">
                    <button type="button" class="btn btn-success btn-lg">Profissão</button>
                </a>

                <a href="/ferramentasAdm/FinalidadeAlvara/create">
                    <button type="button" class="btn btn-success btn-lg">Finalidade Alvará</button>
                </a>
    

            </div>
        </div>
    </div>









@endsection