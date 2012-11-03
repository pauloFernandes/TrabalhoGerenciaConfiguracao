<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
  include("control/hospitais.php");
  
  if($_POST['acao']=="adicionar"){
	  adicionarHospital();
  }
?>

<div style="margin-left:160px;">
  <form name="form1" method="post" action="index.php?pagina=adicionarHospitais">
    <table width="383" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="94">Status</td>
        <td width="289"><select name="status" id="status">
          <option value="Ativado">Ativado</option>
          <option value="Desabilitado">Desabilitado</option>
                </select>
          <input name="acao" type="hidden" id="acao" value="adicionar"></td>
      </tr>
      <tr>
        <td>Razao Social</td>
        <td><input type="text" name="razaosocial" id="razaosocial"></td>
      </tr>
      <tr>
        <td>CNPJ </td>
        <td><input type="text" name="cnpj" id="cnpj"></td>
      </tr>
      <tr>
        <td>Endreço </td>
        <td><input type="text" name="endereco" id="endereco"></td>
      </tr>
      <tr>
        <td>Telefone </td>
        <td><input type="text" name="telefone" id="telefone"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Adicionar"></td>
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
