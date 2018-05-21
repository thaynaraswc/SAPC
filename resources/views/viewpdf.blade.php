@include('layouts/cabecalho-pdf')
<!-- aqui é a base para poder  criar os PDF's. Para fazer os outros é só copiar e alterar as partes necessárias.-->
<style>
 .bold-titulo{
     font-weight: bold;
 }
 .cor-tabela{
     color: #000;
 }
 .borda-table{
    width:100%;
    border: 1px solid #000;
 }
 .tablefont{
            font-size: 13px;
        }

</style>
<p style="text-align: center; color:#000" ><strong>Alvará Policial Civil<br>
    Nº _____/2017</strong>
</p>
<table class="table table-bordered tablefont" >

  <tbody>
  <tr>
      <th colspan="4">Modalidade: </th>
      
      
    </tr>
    <tr>
      <th colspan="4">Vigência:</th>
      
    </tr>
    <tr>
      <th colspan="4">Finalidade:</th>
    </tr>
    <tr>
      <th colspan="4">DADOS DO REQUERENTE</th>

    </tr>
    <tr>
      <th colspan="1">Nome/Razão social</th>
      <td colspan="3">Larry the Bird</td>
    </tr>
    <tr>
      <th colspan="1">Nome fantasia</th>
      <td colspan="3">Larry the Bird</td>
    </tr>
    <tr>
      <th colspan="1">Endereço</th>
      <td colspan="1">Larry the Bird</td>
      <th colspan="1">Telefone</th>
      <td colspan="1">Larry the Bird</td>
    </tr>
    <tr>
      <th colspan="1">Cidade</th>
      <td colspan="1">Palmas</td>
      <th colspan="1">Estado</th>
      <td colspan="1">Tocantins</td>
    </tr>
    <tr>
      <th colspan="1">CPF/CNPJ</th>
      <td colspan="1">000.000.000-00</td>
      <th colspan="1">Inscrição estadual</th>
      <td colspan="1">00.000.000-0</td>
    </tr>
    <!--tr>
      <th colspan="4" style="text-align:center">Deliberação<br>
        Tendo a requerente, por meio do seu representante legal, cumprido todos os requisitos
        exigidos constantes do Anexo Único à Resolução CSPC no 004/2017, incluindo o
        recolhimento da Taxa de Serviços Estaduais (subitem 1.2.2.a), a ela DEFIRO a:
    </th>
      
      
    </tr-->
  </tbody>
   

</table>

 <h3 style="text-align:center" >Deliberação</h3>

    <p  style="font-size:13px; text-align: justify" >Tendo a requerente, por meio do seu representante legal, cumprido todos os requisitos
        exigidos constantes do Anexo Único à Resolução CSPC no 004/2017, incluindo o
        recolhimento da Taxa de Serviços Estaduais (subitem 1.2.2.a), a ela  <strong> DEFIRO</strong> a:</p>

        <h5 style="text-align:center" >LICENÇA ANUAL PARA USO DE EXPLOSIVO EM CAIEIRA E PEDREIRA</h5>

        <p style="font-size:13px; text-align: justify" >Esta Licença não se sobrepõe ou dispensa outras que legalmente forem exigidas no
            âmbito municipal, estadual ou federal para a atividade licenciada.
            Fica ciente a licenciada que, nos termos do art. 11 da Resolução CSPC no 004/2017, no
            exercício do poder de polícia, a Polícia Civil poderá determinar a cessação da atividade e a
            interdição do empreendimento pela não satisfação da obrigação tributária ou por qualquer
            ação ou omissão que contrarie esta Resolução e a legislação correlata.
            O Blaster é o responsável pelos depósitos, devendo observar todos os preceitos de
            segurança, em especial: a) não permitir aglomeração de pessoas nas proximidades dos
            materiais e, b) não permitir que o material, eventualmente danificado, fique ao alcance de
            pessoas não credenciadas.
            E ainda, conforme o art. 18 da mesma Resolução, a Polícia Civil poderá a qualquer
            tempo realizar vistoria no empreendimento licenciado, processos e procedimentos, sendo
            esta prerrogativa ilimitada e abrangendo o imediato acesso a todos os itens exigidos quando
            da expedição deste Alvará. Servindo este de notificação extrajudicial, para cientificar o
            proprietário ou responsável pelo empreendimento à expressa vedação de desvio de
            finalidade, causando efeito imediato da cassação do presente Alvará.
        </p>


<table class="table table-bordered tablefont" style="padding-top: 1%">

    <tbody>
        <tr>
            <th colspan="4">Modalidade: </th>   
        </tr>

    <tr>
        <th colspan="1">Data da expedição</th>
        <td colspan="1">01/01/2016 </td>
        <td colspan="1"><strong>Valor da taxa recolhida</strong></td>
        <td colspan="1">R$150,00</td>
    </tr>
    
        <tr>
            <th colspan="4">Validade: </th>   
        </tr>


        
    </tbody>
    

</table>
<p style="text-align: center"><strong>Atenção: Este ALVARÁ deverá estar em local visível ao público.</strong></p>
    <!--
        <thead>
            <tr>
                <th>Id</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach($model as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->descricao}}</td>
            </tr>
            @endforeach
        </tbody>
        -->
</body>
</html>