



<div style="margin-left:160px;">

 <form name="form1" method="post" action="index.php?pagina=adicionarHospitais">
    <table width="814" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="10%" bgcolor="#CCCCCC">Status</td>
        <td width="10%" bgcolor="#CCCCCC">Razao Social</td>
        <td width="10%" bgcolor="#CCCCCC">CNPJ</td>
        <td width="10%" bgcolor="#CCCCCC">Endreço</td>
        <td width="10%" bgcolor="#CCCCCC">Telefone</td>
      </tr>
    
    <?
  $res=mysql_query("select * from tbl_hospitais order by razao_social asc");
  while($row=mysql_fetch_array($res)){
	?>  <tr>
        <td width="10%"><? echo $row['status']; ?></td>
        <td width="10%"><? echo $row['razao_social']; ?></td>
        <td width="10%"><? echo $row['cnpj']; ?></td>
        <td width="10%"><? echo $row['endereco']; ?></td>
        <td width="10%"><? echo $row['telefone']; ?></td>
      </tr> <? } ?>
    </table>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>
