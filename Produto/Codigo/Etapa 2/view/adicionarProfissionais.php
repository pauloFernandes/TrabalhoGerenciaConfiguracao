<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
  include("control/profissionais.php");
  
  if($_POST['acao']=="adicionar"){
	  adicionarProfissionais();
  }
?>

<div style="margin-left:160px;">
  <form name="form1" method="post" action="index.php?pagina=adicionarProfissionais">
  <h2>Adicionar Profissional</h2>
    <table width="383" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="94">Nome</td>
        <td width="289"><input type="text" name="nome" id="nome">
        <input name="acao" type="hidden" id="acao" value="adicionar"></td>
      </tr>
      <tr>
        <td>CPF</td>
        <td><input type="text" name="cpf" id="cpf"></td>
      </tr>
      <tr>
        <td>Cargo </td>
        <td><input type="text" name="cargo" id="cargo"></td>
      </tr>
      <tr>
        <td>Horario </td>
        <td><input type="text" name="horario" id="horario"></td>
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
