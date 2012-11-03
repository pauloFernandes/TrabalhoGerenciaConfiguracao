



<div style="margin-left:160px;">

 <form name="form1" method="post" action="index.php?pagina=localizarProfissionais">
    <h2>Localizar Profissionais</h2>
    <p>
      <input type="text" name="q" id="q" />
      <input type="submit" name="button" id="button" value="Localizar" />
    </p>
    <table width="814" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="10%" bgcolor="#CCCCCC">Nome</td>
        <td width="10%" bgcolor="#CCCCCC">CPF</td>
        <td width="10%" bgcolor="#CCCCCC">Cargo</td>
        <td width="10%" bgcolor="#CCCCCC">Horário</td>
      </tr>
    
    <?
 
    $res=mysql_query("select * from tbl_profissionais where nome like '%".$_POST['q']."%'  order by nome asc");
  while($row=mysql_fetch_array($res)){
  
	?>  
    <tr>
      <td><? echo $row['nome']; ?></td>
      <td><? echo $row['cpf']; ?></td>
      <td><? echo $row['cargo']; ?></td>
      <td><? echo $row['horario']; ?></td>
    </tr> 
    <? } ?>
    </table>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>
