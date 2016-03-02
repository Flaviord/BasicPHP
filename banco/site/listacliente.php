<?php
 //limpa os espaços em branco do começo e fim da string
 $_POST['pesquisa']= trim($_POST['pesquisa']);

 $query= "SELECT * FROM clientes ";

 //testa se o usuário preencheu algum nome
 if(strlen($_POST['pesquisa']) > 0){
    $query.= " WHERE nome LIKE '%{$_POST['pesquisa']}%'";
 }

 //envia a consulta para o banco de dados
 $result= mysql_query($query,$conexao);

 echo "<table width=\"98%\" bgcolor=\"000000\" cellspacing=\"1\">
        <tr bgcolor=\"ffffff\">
         <td>
          Código
         </td>
         <td>
          Nome
         </td>
         <td>
          Endereço
         </td>
         <td>
          Data nasci.
         </td>
         <td>
          Sexo
         </td>
         <td>
          Ações
         </td>
        </tr>";
 $cor= "ff0000";
 while($dado= mysql_fetch_array($result)){
       
       $cor= $cor == 'ff0000' ? '0000ff' : 'ff0000';
       $data= implode('/',array_reverse(explode('-',$dado['data_nascimento'])));
       echo "<tr bgcolor=\"$cor\">
              <td align=\"center\">
               {$dado['id_cliente']}
              </td>
              <td>
               {$dado['nome']}
              </td>
              <td>
               {$dado['endereco']}
              </td>
              <td align=\"center\">
               $data
              </td>
              <td align=\"center\">
               {$dado['sexo']}
              </td>
              <td>
               [<a href=\"principal.php?t=formeditacliente.php&id={$dado['id_cliente']}\">Editar</a>]
               [<a href=\"#\"
                   onclick=\"if(confirm('Deseja deletar?')){
                                document.location.replace('principal.php?t=removecliente.php&id={$dado['id_cliente']}');
                             }\">Remover</a>]
              </td>
             </tr>";
 }



?>