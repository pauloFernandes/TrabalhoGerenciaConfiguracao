<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
  include("control/pacientes.php");
  
  if($_POST['acao']=="adicionar"){
	  adicionarPacientes();
  }
?>

<div style="margin-left:160px;">
  <form name="form1" method="post" action="index.php?pagina=adicionarPacientes" enctype="multipart/form-data">
    <h2>Adicionar Pacientes</h2>
    <table width="383" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="94">XML</td>
        <td width="289"><input type="file" name="arquivo" id="arquivo">
        <input name="acao" type="hidden" id="acao" value="adicionar"></td>
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
