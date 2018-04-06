@extends('layouts.app')

@extends('layouts/menu')

@section('content')
<div class="container">
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Início</a></li>
            <li class="breadcrumb-item"><a href="/registroOpcoes/show">Registro</a></li>
            <li class="breadcrumb-item"><a href="/registroEmpresa/create">Registro de empresa</a></li>
            
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

    <div style="margin-top: 5%" class="container">
        <div class="card">
            <h5 class="card-header text-center">Registro da empresa</h5>
            <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="tipoEstabelecimento">Tipo de estabelecimento / evento</label>
                    <select class="form-control" id="tipoEstabelecimento">
                        @foreach($FrmtFinAlvara as $FrmtFinAlvara)
                        
                            <option selected value="{{$FrmtFinAlvara['id']}}"> {{ $FrmtFinAlvara['nome'] }} </option>
                        
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nomeFantasia">Nome Fantasia</label>
                            <input type="text" class="form-control" id="nomeFantasia" name="nomeFantasia" placeholder="Nome fantasia">
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" class="form-control" id="cpnj" name="cpnj" placeholder="CNPJ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="razaoSocial">Razão Social</label>
                            <input type="text" class="form-control" id="razaoSocial" name="razaoSocial" placeholder="Razão Social">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="inscricaoEstadual">Inscrição Estadual</label>
                            <input type="text" class="form-control" id="inscricaoEstadual" name="inscricaoEstadual" placeholder="Inscrição Estadual">
                        </div>
                    </div>
                </div>
                <div style="border-top: 3px solid #1b88fd">
                <div class="row" style="margin-top: 3%">
                    <div class="col">
                        <div class="form-group">
                        <label for="tipoEnderecoEmpresa">Tipo de endereço</label>
                        <select class="form-control" id="tipoEnderecoEmpresa" name="tipoEnderecoEmpresa">
                        <option>Comercial</option>
                        <option>Residencial</option>
                        </select>
                    </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label for="cepEnderecoEmpresa">CEP</label>
                            <input type="text" class="form-control" id="cepEnderecoEmpresa" name="cepEnderecoEmpresa" placeholder="CEP">
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label for="bairoEnderecoEmpresa">Bairro</label>
                            <input type="text" class="form-control" id="bairoEnderecoEmpresa" name="bairoEnderecoEmpresa" placeholder="Bairro">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="enderecoEmpresa">Endereço</label>
                    <input type="text" class="form-control" id="enderecoEmpresa" name="enderecoEmpresa" placeholder="endereco">
                </div>

                <div class="row" >
                <div class="col">
                    <div class="form-group">
                        <label for="numeroEnderecoEmpresa">Número</label>
                        <input type="text" class="form-control" id="numeroEnderecoEmpresa" name="numeroEnderecoEmpresa" placeholder="Número">
                    </div>
                    </div>
                
                    <div class="col">
                        <div class="form-group">
                            <label for="complementoEnderecoEmpresa">Complemento</label>
                            <input type="text" class="form-control" id="complementoEnderecoEmpresa" name="complementoEnderecoEmpresa" placeholder="Complemento">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="estadoEnderecoEmpresa">Estado</label>
                            <select class="form-control" id="estadoEnderecoEmpresa" name="estadoEnderecoEmpresa">
                                @foreach($estados as $estado)
                                @if($estado['id'] == '27')
                                    <option selected value="{{$estado['id']}}"> {{ $estado['descricao'] }} </option>
                                @else
                                    <option value="{{ $estado['id'] }}"> {{ $estado['descricao'] }} </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="cidadeEnderecoEmpresa">Cidade</label>
                            <select class="form-control" id="cidadeEnderecoEmpresa" name="cidadeEnderecoEmpresa">
                            <option>Palmas</option>
                            <option>Gurupi</option>
                            <option>Araguaína</option>
                            </select>
                        </div>
                    </div>
                
                    
                    <div class="col">
                        <div class="form-group">
                            <label for="referenciaEnderecoEmpresa">Referência</label>
                            <textarea class="form-control" id="referenciaEnderecoEmpresa" name="referenciaEnderecoEmpresa" rows="2"></textarea>
                        </div>
                </div>
                </div>


                




                <a href="#" style="margin-top:3%; float:right" class="btn btn-primary">Próximo</a>
            </form>
               
            </div>
        </div>
    </div>
</div>

@endsection


