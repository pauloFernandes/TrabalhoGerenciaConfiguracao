<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
// Chama a página Materiais que contém todos as funções de Adicionar, Localizar, excluir, Editar das páginas de Materiais.
  include("control/materiais.php");
   
// Verificar se o valor que vem do formulário ( Ação ) é igual a "Editar", se for ele executa a função abaixo.   
  if($_POST['acao']=="editar"){

// Chama a Função salvarMateriais() que está dentro da página control/materiais.php e executa o Update no banco de dados, na tabela de Materiais.
	  salvarMateriais();
  }
  
// Pega o ID que veio na URL como GET, executa o código de seleção no banco de dados e mostra os valores na tela com o Fetch Array.  
$sql = mysql_query("select * from tbl_materiais where material_id='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
$row = mysql_fetch_array($sql);
  
?>

<div style="margin-left:160px;">
  <form name="form1" method="post" action="index.php?pagina=editarMateriais">
   <h2>Editar Materiais</h2>
    <table width="383" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="111">Nome Material:</td>
        <td width="252"><input type="text" name="material_nome" id="material_nome" value="<? echo $row['material_nome']; // Mostra as informações da coluna na tela. ?>">
          <input name="acao" type="hidden" id="acao" value="editar">
          <input name="id" type="hidden" id="id" value="<? echo $row['material_id']; // Mostra as informações da coluna . ?>"></td>
      </tr>
      <tr>
        <td>Data Cadastro:</td>
        <td><input type="text" name="material_data" id="material_data" value="<? echo $row['material_data']; // Mostra as informações da coluna na tela. ?>"></td>
      </tr>
      <tr>
        <td>Quantidade:</td>
        <td><input type="text" name="material_quantidade" id="material_quantidade" value="<? echo $row['material_quantidade']; // Mostra as informações da coluna na tela. ?>"></td>
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
