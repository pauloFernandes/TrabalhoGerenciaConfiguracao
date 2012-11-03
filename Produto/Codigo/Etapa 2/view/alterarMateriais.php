
<?
// Chama a página Materiais que contém todos as funções de Adicionar, Localizar, excluir, Editar das páginas de Materiais
  include("control/materiais.php");
?>



<div style="margin-left:160px;">

 <form name="form1" method="post" action="index.php?pagina=adicionarHospitais">
  <h2>Editar Materiais</h2>
    <table width="814" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="18%" bgcolor="#CCCCCC">Nome</td>
        <td width="18%" bgcolor="#CCCCCC">Data Cadastro</td>
        <td width="18%" bgcolor="#CCCCCC">Quantidade</td>
        <td width="7%" bgcolor="#CCCCCC">Alterar</td>
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
        <td width="7%"><a href="index.php?pagina=editarMateriais&id=<? echo $row['material_id']; // Mostra as informações da coluna na tela. ?>">Alterar</a></td>
    </tr> <? } // Fecha o while. ?>
    </table>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>
