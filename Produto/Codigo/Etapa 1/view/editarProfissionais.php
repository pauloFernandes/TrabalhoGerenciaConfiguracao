<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
  include("control/profissionais.php");
  
  if($_POST['acao']=="editar"){
	  salvarProfissionais();
  }
  
$sql = mysql_query("select * from tbl_profissionais where id_profissionais='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
$row = mysql_fetch_array($sql);
?>

<div style="margin-left:160px;">
  <form name="form1" method="post" action="index.php?pagina=editarProfissionais">
    <table width="383" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="94">Nome</td>
        <td width="289"><input type="text" name="nome" id="nome" value="<? echo $row['nome']; ?>">
        <input name="acao" type="hidden" id="acao" value="editar">
           <input name="id" type="hidden" id="id" value="<? echo $row['id_profissionais']; ?>">
        </td>
      </tr>
      <tr>
        <td>CPF</td>
        <td><input type="text" name="cpf" id="cpf" value="<? echo $row['cpf']; ?>"></td>
      </tr>
      <tr>
        <td>Cargo </td>
        <td><input type="text" name="cargo" id="cargo" value="<? echo $row['cargo']; ?>"></td>
      </tr>
      <tr>
        <td>Horario </td>
        <td><input type="text" name="horario" id="horario" value="<? echo $row['horario']; ?>"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Editar"></td>
      </tr>
    </table>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>

</body>
</html>
