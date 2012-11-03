
<?
// Chama a página atendimentos que contém todos as funções de Adicionar, Localizar, excluir, Editar das páginas de atendimentos
  include("control/atendimento.php");

// Verificar se o valor que vem do formulário ( Ação ) é igual a "Editar", se for ele executa a função abaixo.     
  if($_GET['id']<>""){

// Chama a Função excluirMateriais() que está dentro da página control/materiais.php e executa o Update no banco de dados, na tabela de atendimentos.
	  excluirAtendimento();
  }
?>



<div style="margin-left:160px;">

 <form name="form1" method="post" action="index.php?pagina=">
   <h2>Excluir Atendimentos</h2>
    <table width="814" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="20%" bgcolor="#CCCCCC">Paciente</td>
        <td width="20%" bgcolor="#CCCCCC">Data</td>
        <td width="20%" bgcolor="#CCCCCC">Motivo</td>
        <td width="20%" bgcolor="#CCCCCC">Providencias</td>
        <td width="20%" bgcolor="#CCCCCC">Materiais Utilizados</td>
        <td width="7%" bgcolor="#CCCCCC">Deletar</td>
      </tr>
    
    <?
// executa o código de seleção no banco de dados e mostra todos os valores na tela, ordernando por material_nome em ordem alfabetica.  
  $res=mysql_query("select * from tbl_atendimentos order by atendimento_data asc");

//Faz o while que é mostrar as informações na tela, enquanto tiver dados na tabela.
  while($row=mysql_fetch_array($res)){
	?>  <tr>
      <td width="20%"><? echo getPacientex($row['atendimento_fkPaciente']); // Mostra as informações da coluna na tela. ?></td>
      <td width="20%"><? echo $row['atendimento_data']; // Mostra as informações da coluna na tela.  ?></td>
      <td width="20%"><? echo $row['atendimento_motivo']; // Mostra as informações da coluna na tela. ?></td>
      <td width="20%"><? echo $row['atendimento_providencias']; // Mostra as informações da coluna na tela. ?></td>
      <td width="10%"><? $sql_produtos=mysql_query("Select * from tbl_atendimentosmatusados mu
	 inner join tbl_materiais m on (mu.atendimentoMatUsados_fkmaterial=m.material_id)
	 where atendimentoMatUsados_atendimento='$row[atendimento_id]'");
		while($row_produtos=mysql_fetch_array($sql_produtos)){ ?>
          <? echo $row_produtos['material_nome'];?> - <? echo $row_produtos['atendimentoMatUsados_quantidade'];?> usados <br />
          <? } ?>
      </td>
      <td width="7%"><a href="index.php?pagina=excluirAtendimento&amp;id=<? echo $row['atendimento_id']; // Mostra as informações da coluna na tela. ?>">Deletar</a></td>
    </tr> <? } ?>
    </table>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>
