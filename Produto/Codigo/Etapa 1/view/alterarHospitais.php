
<?
  include("control/hospitais.php");
  

?>



<div style="margin-left:160px;">

 <form name="form1" method="post" action="index.php?pagina=adicionarHospitais">
    <table width="814" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="18%" bgcolor="#CCCCCC">Status</td>
        <td width="18%" bgcolor="#CCCCCC">Razao Social</td>
        <td width="18%" bgcolor="#CCCCCC">CNPJ</td>
        <td width="18%" bgcolor="#CCCCCC">Endreço</td>
        <td width="21%" bgcolor="#CCCCCC">Telefone</td>
        <td width="7%" bgcolor="#CCCCCC">Alterar</td>
      </tr>
    
    <?
  $res=mysql_query("select * from tbl_hospitais order by razao_social asc");
  while($row=mysql_fetch_array($res)){
	?>  <tr>
        <td width="18%"><? echo $row['status']; ?></td>
        <td width="18%"><? echo $row['razao_social']; ?></td>
        <td width="18%"><? echo $row['cnpj']; ?></td>
        <td width="18%"><? echo $row['endereco']; ?></td>
        <td width="21%"><? echo $row['telefone']; ?></td>
        <td width="7%"><a href="index.php?pagina=editarHospitais&id=<? echo $row['id_hospitais']; ?>">Alterar</a></td>
    </tr> <? } ?>
    </table>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>
