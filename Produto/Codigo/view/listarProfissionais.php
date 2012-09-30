



<div style="margin-left:160px;">

 <form name="form1" method="post" action="index.php?pagina=adicionarHospitais">
    <table width="814" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="10%" bgcolor="#CCCCCC">Nome</td>
        <td width="10%" bgcolor="#CCCCCC">CPF</td>
        <td width="10%" bgcolor="#CCCCCC">Cargo</td>
        <td width="10%" bgcolor="#CCCCCC">Horário</td>
      </tr>
    
    <?
  $res=mysql_query("select * from tbl_profissionais order by nome asc");
  while($row=mysql_fetch_array($res)){
	?>  <tr>
        <td width="10%"><? echo $row['nome']; ?></td>
        <td width="10%"><? echo $row['cpf']; ?></td>
        <td width="10%"><? echo $row['cargo']; ?></td>
        <td width="10%"><? echo $row['horario']; ?></td>
        </tr> <? } ?>
    </table>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>
