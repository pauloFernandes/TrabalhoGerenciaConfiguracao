<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
  include("control/hospitais.php");
   
  if($_POST['acao']=="editar"){
	  salvarHospital();
  }
  
$sql = mysql_query("select * from tbl_hospitais where id_hospitais='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
$row = mysql_fetch_array($sql);
  
?>

<div style="margin-left:160px;">
  <form name="form1" method="post" action="index.php?pagina=editarHospitais">
   <h2>Editar Hospitais</h2>
    <table width="383" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="94">Status</td>
        <td width="289"><select name="status" id="status">
          <option value="Ativado">Ativado</option>
          <option value="Desabilitado">Desabilitado</option>
                </select>
          <input name="acao" type="hidden" id="acao" value="editar">
          <input name="id" type="hidden" id="id" value="<? echo $row['id_hospitais']; ?>"></td>
      </tr>
      <tr>
        <td>Razao Social</td>
        <td><input type="text" name="razaosocial" id="razaosocial" value="<? echo $row['razao_social']; ?>"></td>
      </tr>
      <tr>
        <td>CNPJ </td>
        <td><input type="text" name="cnpj" id="cnpj" value="<? echo $row['cnpj']; ?>"></td>
      </tr>
      <tr>
        <td>Endreço </td>
        <td><input type="text" name="endereco" id="endereco" value="<? echo $row['endereco']; ?>"></td>
      </tr>
      <tr>
        <td>Telefone </td>
        <td><input type="text" name="telefone" id="telefone" value="<? echo $row['telefone']; ?>"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Salvar"></td>
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
