<?
// Chama a página atendimentos que contém todos as funções de Adicionar, Localizar, excluir, Editar das páginas de atendimentos
  include("control/atendimento.php");
?>




<div style="margin-left:160px;">

 <form name="form1" method="post" action="index.php?pagina=localizarAtendimento">
    <h2>Localizar Atendimentos</h2>
    <p>
      <input type="text" name="q" id="q" />
      <input type="submit" name="button" id="button" value="Localizar" />
    </p>
    <table width="814" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="10%" bgcolor="#CCCCCC">Paciente</td>
        <td width="10%" bgcolor="#CCCCCC">Data</td>
        <td width="5%" bgcolor="#CCCCCC">Motivo</td>
        <td width="5%" bgcolor="#CCCCCC">Providencias</td>
        <td width="10%" bgcolor="#CCCCCC">Materiais Utilizados</td>
      </tr>
    
    <?
// executa o código de seleção no banco de dados filtrando com o Like que localizar tanto no começo quanto no final da string da coluna de paciente_nome, orderna por paciente_nome em ordem alfabetica e mostra todos os valores na tela.  
  $res=mysql_query("select * from tbl_atendimentos a
  inner join tbl_pacientes p on (p.paciente_id=a.atendimento_fkPaciente) 
   where p.paciente_nome like '%".$_POST['q']."%' order by p.paciente_nome asc");
  
//Faz o while que é mostrar as informações na tela, enquanto tiver dados na tabela.
  while($row=mysql_fetch_array($res)){
	?>  <tr>
        <td width="10%"><? echo $row['paciente_nome']; // Mostra as informações da coluna na tela. ?></td>
        <td width="10%"><? echo $row['atendimento_data']; // Mostra as informações da coluna na tela.  ?></td>
        <td width="0%"><? echo $row['atendimento_motivo']; // Mostra as informações da coluna na tela. ?></td>
        <td width="0%"><? echo $row['atendimento_providencias']; // Mostra as informações da coluna na tela. ?></td>
        <td width="10%"><? $sql_produtos=mysql_query("Select * from tbl_atendimentosmatusados mu
	 inner join tbl_materiais m on (mu.atendimentoMatUsados_fkmaterial=m.material_id)
	 where atendimentoMatUsados_atendimento='$row[atendimento_id]'");
		while($row_produtos=mysql_fetch_array($sql_produtos)){ ?>
            <? echo $row_produtos['material_nome'];?> - <? echo $row_produtos['atendimentoMatUsados_quantidade'];?> usados <br />
          <? } ?>
        </td>
    </tr> <? }  // Fecha o while. ?>
    </table>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>
