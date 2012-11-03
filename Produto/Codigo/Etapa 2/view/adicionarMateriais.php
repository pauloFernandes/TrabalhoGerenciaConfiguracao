<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
// Chama a página Materiais que contém todos as funções de Adicionar, Localizar, excluir, Editar das páginas de Materiais
  include("control/materiais.php");
  
// Verificar se o valor que vem do formulário ( Ação ) é igual a "Adicionar", se for ele executa a função abaixo.
  if($_POST['acao']=="adicionar"){
	
// Chama a Função AdicionarHospital() que executa o Insert no banco de dados, na tabela de Materiais
	  adicionarMateriais();
  }
?>

<div style="margin-left:160px;">
  <form name="form1" method="post" action="index.php?pagina=adicionarMateriais">
  <h2>Adicionar Materiais</h2>
    <table width="383" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="111">Nome Material:</td>
        <td width="252"><input type="text" name="material_nome" id="material_nome">
        <input name="acao" type="hidden" id="acao" value="adicionar"></td>
      </tr>
      <tr>
        <td>Data Cadastro:</td>
        <td><input type="text" name="material_data" id="material_data"></td>
      </tr>
      <tr>
        <td>Quantidade:</td>
        <td><input type="text" name="material_quantidade" id="material_quantidade"></td>
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
