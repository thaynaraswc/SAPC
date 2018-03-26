@extends('layouts.app')

@extends('layouts/menu')

@section('content')

<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="/ferramentasAdm/FinalidadeAlvara/create">Finalidade Alvará</a></li>
        </ol>
    </nav>
</div>

<div style="margin-top: 5%" class="container">
    <div class="card">
        <h5 class="card-header text-center">Ferramentas do administrador</h5>
        <div class="card-body text-center">
            <form>
            {{ csrf_field() }}
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

@endsection