@extends('layouts.app')

@extends('layouts/menu')

@section('content')

<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="#">Alvará</a></li>
            <li class="breadcrumb-item"><a href="/AlvaraAnual/create">Alvará Anual</a></li>
            
        </ol>
    </nav>
    </div>


<div style="margin-top: 5%" class="container">
        <div class="card">
            <h5 class="card-header text-center">Opções de alvará</h5>
            <div class="card-body text-center">
                <a href="/alvaraAnual/create">
                    <button type="button" class="btn btn-primary btn-lg">Criar</button>
                </a>

                <a href="#">
                    <button type="button" class="btn btn-primary btn-lg">Consultar</button>
                </a>

                <a href="#">
                    <button type="button" class="btn btn-primary btn-lg">Diário</button>
                </a>

                <a href="#">
                    <button type="button" class="btn btn-primary btn-lg">Por evento</button>
                </a>

                <a href="#">
                    <button type="button" class="btn btn-primary btn-lg">Por vistoria</button>
                </a>

            </div>
        </div>
    </div>

    <div style="margin-top: 5%" class="container">



<div style="border-top: 3px solid #1b88fd">

    <div class="card">
        <h5 class="card-header text-center">Alvará Anual</h5>
        <div class="card-body">
            <form>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="cpfCNPJ">CPF/CNPJ</label>
                            <input type="number" class="form-control" id="cpfCNPJ" placeholder="CPF/CNPJ">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="inscricaoEstadual">Incrição Estadual</label>
                            <input type="text" class="form-control" id="inscricaoEstadual" placeholder="Inscrição Estadual">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="modalidadeAlvara">Modalidade</label>
                    <select class="form-control" id="modalidadeAlvara">
                    <option>ALVARÁ DE LICENÇA</option>
                    <option>ALVARÁ DE AUTORIZAÇÃO</option>
                    <option>ALVARÁ DE RESTITUIÇÃO</option>
                    <option>CERTIDÃO DE VISTORIA</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="vigenciaAlvara">Vigência</label>
                    <select class="form-control" id="vigenciaAlvara">
                    <option>ANUAL</option>
                    <option>MENSAL</option>
                    <option>DIÁRIO</option>
                    <option>POR EVENTO</option>
                    <option>POR VISTORIA</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="finalidadeAlvara">Finalidade</label>
                    <select id="finalidadeAlvara" name="finalidadeAlvara" class="form-control">
                        @foreach($alvaras as $alv)
                        
                            <option value="{{ $alv->id }}"> {{ $alv->nome }} </option>
                        
                        @endforeach
                    </select> 
                </div>
                <a href="#" style="margin-top:3%; float:right" class="btn btn-primary">Próximo</a>
            </div>
        
        </div>
    
    </div>

</form>

</div>
</div>
</div>
</div>










@endsection