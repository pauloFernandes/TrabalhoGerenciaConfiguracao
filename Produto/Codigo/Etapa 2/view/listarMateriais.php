



<div style="margin-left:160px;">

 <form name="form1" method="post" action="index.php?pagina=adicionarMateriais">
   <h2>Listar Materiais</h2>
    <table width="814" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="10%" bgcolor="#CCCCCC">Nome</td>
        <td width="10%" bgcolor="#CCCCCC">Data Cadastro</td>
        <td width="10%" bgcolor="#CCCCCC">Quantidade</td>
      </tr>
    
    <?
// executa o código de seleção no banco de dados e mostra todos os valores na tela.  
  $res=mysql_query("select * from tbl_materiais order by material_nome asc");
  
//Faz o while que é mostrar as informações na tela, enquanto tiver dados na tabela.
  while($row=mysql_fetch_array($res)){
	?>  <tr>
        <td width="10%"><? echo $row['material_nome']; // Mostra as informações da coluna na tela. ?></td>
        <td width="10%"><? echo $row['material_data']; // Mostra as informações da coluna na tela. ?></td>
        <td width="10%"><? echo $row['material_quantidade']; // Mostra as informações da coluna na tela. ?></td>
        </tr> <? } // Fecha o while. ?>
    </table>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>
