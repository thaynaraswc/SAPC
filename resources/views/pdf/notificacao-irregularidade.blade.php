
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



 <h3 style="text-align:center; border: 1px solid #000; margin-top: 20px; margin-bottom: 25px; margin-top: 4%" >NOTIFICAÇÃO PARA REGULARIZAÇÃO</h3>

    <p  style="font-size:13px; text-align: justify; margin-top: 6%" >
            O <strong>DELEGADO DE POLÍCIA TITULAR DA (IDENTIFICAR A UNIDADE POLICIAL)</strong>, no desempenho de
            suas atribuições Constitucionais e Legais, em especial o disposto na Lei 1.287, de 28 de dezembro
            de 2001 (Código Tributário do Estado do Tocantins), alterada pela Lei no 3.019, de 30 de setembro
            de 2015, no Decreto no 5.444, de 15 de junho de 2016 e na Resolução no 004, de 25 de outubro de
            2017, alterada pela Resolução no 001, de 31 de janeiro de 2018, ambas do Conselho Superior da
            Polícia Civil, e
            Considerando o que dispõe o Código Tributário do Estado do Tocantins - CTE, relativo à
            instituição da Taxa de Serviços Estaduais – TSE;
            Considerando que, conforme o item 1.2 do Anexo IV do CTE compete exclusivamente à
            Polícia Civil o exercício da fiscalização e o poder de polícia quanto aos atos de Polícia
            Especializada;
            Considerando que, para o exercício de atividade ou a utilização dos serviços públicos pelo
            contribuinte da TSE, elencados no Anexo IV do CTE, faz-se necessária a emissão de Alvará de
            Licença ou Autorização pela Polícia Civil, condicionada ainda ao cumprimento dos requisitos
            exigíveis para cada atividade prevista no Anexo único à Resolução CSPC no 004/2017 alterada pela
            Resolução CSPC no 001/2018, ambas do Conselho Superior da Polícia Civil, dentre elas a
            comprovação do recolhimento da TSE;
            Considerando que foi constatado que a empresa (razão social, CNPJ, endereço), NÃO SE
            ENCONTRA devidamente cadastrada junto à esta Unidade Policial, estando assim em situação
            irregular,
            <strong>MANDA</strong> a qualquer Agente de Polícia a quem esta for distribuída que <strong>NOTIFIQUE</strong> o
            representante legal da referida empresa para que compareça nesta Delegacia de Polícia, no prazo
            de até 10 (dez) dias, a contar da ciência desta, de posse de toda a documentação exigível para o
            ramo de atividade, a fim de ser devidamente cadastrada e se regularizar, sob pena da adoção de
            medidas legais cabíveis, sujeitando o estabelecimento, inclusive à interdição ou suspensão de
            atividade.
            CUMPRA-SE.
        </p>

<div style="border: 1x solid #000; margin-top: 12%">
    <p style="text-align: center; margin-top: 5%">Eu,______________________________________________________________________________,</p>
        <p style="text-align: center;">recebi nesta data a presente notificação.</p>

        <p style="text-align: center; margin-top: 5%">________________,_____de___________________de_________</p>

        <p style="text-align: center; margin-top: 5%">Assinatura: ________________________________________</p>
    </p>
</div>
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