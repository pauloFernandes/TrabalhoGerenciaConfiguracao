
<?
// Chama a página Materiais que contém todos as funções de Adicionar, Localizar, excluir, Editar das páginas de Materiais
  include("control/materiais.php");

// Verificar se o valor que vem do formulário ( Ação ) é igual a "Editar", se for ele executa a função abaixo.     
  if($_GET['id']<>""){

// Chama a Função excluirMateriais() que está dentro da página control/materiais.php e executa o Update no banco de dados, na tabela de Materiais.
	  excluirMateriais();
  }
?>



<div style="margin-left:160px;">

 <form name="form1" method="post" action="index.php?pagina=">
   <h2>Excluir Materiais</h2>
    <table width="814" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="18%" bgcolor="#CCCCCC">Nome</td>
        <td width="18%" bgcolor="#CCCCCC">Data Cadastro</td>
        <td width="18%" bgcolor="#CCCCCC">Quantidade</td>
        <td width="7%" bgcolor="#CCCCCC">Deletar</td>
      </tr>
    
    <?
// executa o código de seleção no banco de dados e mostra todos os valores na tela, ordernando por material_nome em ordem alfabetica.  
  $res=mysql_query("select * from tbl_materiais order by material_nome asc");

//Faz o while que é mostrar as informações na tela, enquanto tiver dados na tabela.
  while($row=mysql_fetch_array($res)){
	?>  <tr>
        <td width="18%"><? echo $row['material_nome']; // Mostra as informações da coluna na tela. ?></td>
        <td width="18%"><? echo $row['material_data']; // Mostra as informações da coluna na tela. ?></td>
        <td width="18%"><? echo $row['material_quantidade']; // Mostra as informações da coluna na tela. ?></td>
        <td width="7%"><a href="index.php?pagina=excluirMateriais&amp;id=<? echo $row['material_id']; // Mostra as informações da coluna na tela. ?>">Deletar</a></td>
    </tr> <? } ?>
    </table>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>
