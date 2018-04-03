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

    <div style="margin-top: 5%" class="container">



                <div style="border-top: 3px solid #1b88fd">
                
                    <div class="card">
                        <h5 class="card-header text-center">Registro de pessoa</h5>
                        <div class="card-body">
                            <form method="POST" action="/registroPessoa/create" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nomePessoa">Nome</label>
                                            <input type="text" class="form-control" id="nomePessoa"  name="nomePessoa" placeholder="Nome">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="CPFPessoa">CPF</label>
                                            <input type="text" class="form-control" id="CPFPessoa" name="CPFPessoa" placeholder="CPF">
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="identidadePessoa">Nº identidade</label>
                                            <input type="text" class="form-control" id="identidadePessoa" name="identidadePessoa" placeholder="Nº identidade">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="dataEmissaoIdentidade">Data de emissão</label>
                                            <input type="date" class="form-control" id="dataEmissaoIdentidade" name="dataEmissaoIdentidade">
                                        </div>
                                    </div>
                                </div>   
                                    <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nomeMaePessoa">Nome da mãe</label>
                                            <input type="text" class="form-control" id="nomeMaePessoa" namme="nomeMaePessoa" placeholder="Nome da mãe">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nomePaiPessoa">Nome do pai</label>
                                            <input type="text" class="form-control" id="nomePaiPessoa" name="nomePaiPessoa" placeholder="Nome do pai">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="dataNascimento">Data de Nascimento</label>
                                            <input type="date" class="form-control" id="dataNascimento" name="dataNascimento">
                                        </div>
                                    </div>
                                    <div class="col">
                                    <label for="sexoPessoa">Sexo</label>
                                    <select class="form-control" id="sexoPessoa" name="sexoPessoa">
                                    <option>Feminino</option>
                                    <option>Masculino</option>
                                    <option>Não informado</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nacionalidades">Nacionalidade</label>
                                            <select class="form-control" id="nacionalidades" name="nacionalidades">
                                            <option>Brasileiro</option>
                                            <option>Estrangeiro</option>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                    <label for="paisNascimento">País de nascimento</label>
                                    <select class="form-control" id="paisNascimento" name="paisNascimento">
                                    <option>Alemanha</option>
                                    <option>Brasil</option>
                                    <option>Espanha</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="estadoNascimento">Estado de nascimento</label>
                                            <select id="estado" name="estado" class="form-control">
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
                                    <div class="col">
                                    <label for="cidadeNascimento">Cidade de nascimento</label>
                                    <select class="form-control" id="cidadeNascimento" name="cidadeNascimento">
                                    <option>Palmas</option>
                                    <option>Araguaína</option>
                                    <option>Gurupi</option>
                                    </select>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="profissao">Profissão</label>
                                            <select class="form-control" id="profissao" name="profissao">
                                            <option>Administrador</option>
                                            <option>Advogado</option>
                                            <option>Barman</option>
                                            <option>Biólogo</option>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                    <label for="localTrabalho">Local de trabalho</label>
                                    <input type="text" class="form-control" id="localTrabalho" name="localTrabalho" placeholder="Local de trabalho">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="estadoCivil">Estado Civil</label>
                                            <select class="form-control" id="estadoCivil" name="estadoCivil">
                                            <option>Solteiro</option>
                                            <option>Casado</option>
                                            <option>Divorciado</option>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                    <label for="escolaridade">Escolaridade</label>
                                    <select class="form-control" id="escolaridade" name="escolaridade">
                                    <option>1º grau incompleto (ensino fundamental)</option>
                                    <option>1º grau completo (ensino fundamental)</option>
                                    <option>2º grau incompleto (ensino médio)</option>
                                    <option>2º grau completo (ensino médio)</option>
                                    <option>Superior Incompleto</option>
                                    <option>Superior Completo</option>
                                    </select>
                                    </div>
                                </div>

                                <div style="border-top: 3px solid #1b88fd">
                                <h4 class="text-center" style="margin-top: 15px">Endereço</h4 >
                                    <div class="row" style="margin-top: 3%">
                                        <div class="col">
                                            <div class="form-group">
                                            <label for="tipoEnderecoPessoa">Tipo de endereço</label>
                                            <select class="form-control" id="tipoEnderecoPessoa" name="tipoEnderecoPessoa">
                                            <option>Comercial</option>
                                            <option>Residencial</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                                <label for="cepEnderecoPessoa">CEP</label>
                                                <input type="text" class="form-control" id="cepEnderecoPessoa" name="cepEnderecoPessoa" placeholder="CEP">
                                            </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                                <label for="bairoEnderecoPessoa">Bairro</label>
                                                <input type="text" class="form-control" id="bairoEnderecoPessoa" name="bairoEnderecoPessoa" placeholder="Bairro">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="enderecoPessoa">Endereço</label>
                                        <input type="text" class="form-control" id="enderecoPessoa" name="enderecoPessoa" placeholder="endereco">
                                    </div>

                                    <div class="row" >
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="numeroEnderecoPessoa">Número</label>
                                            <input type="text" class="form-control" id="numeroEnderecoPessoa" name="numeroEnderecoPessoa" placeholder="Número">
                                        </div>
                                        </div>
                                    
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="complementoEnderecoPessoa">Complemento</label>
                                                <input type="text" class="form-control" id="complementoEnderecoPessoa" name="complementoEnderecoPessoa" placeholder="Complemento">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="estadoEnderecoPessoa">Estado</label>
                                                <select class="form-control" id="estado" name="estado">
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
                                        <label for="cidadeEnderecoPessoa">Cidade</label>
                                        <select class="form-control" id="municipio" name="municipio" >
                                            <option> Selecione uma cidade </option>
                                        </select>
                                            </div>
                                        </div>
                                    
                                        
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="referenciaEnderecoPessoa">Referência</label>
                                                <textarea class="form-control" id="referenciaEnderecoPessoa" name="referenciaEnderecoPessoa" rows="2"></textarea>
                                            </div>
                                    </div>
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

@section('js')
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
    <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
    <script src="js/regioes.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection

    </body>
    </html>