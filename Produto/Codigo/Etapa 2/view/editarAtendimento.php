<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
// Chama a página atendimentos que contém todos as funções de Adicionar, Localizar, excluir, Editar das páginas de atendimentos.
  include("control/atendimento.php");
   
// Verificar se o valor que vem do formulário ( Ação ) é igual a "Editar", se for ele executa a função abaixo.   
  if($_POST['acao']=="editar"){

// Chama a Função salvarMateriais() que está dentro da página control/materiais.php e executa o Update no banco de dados, na tabela de Materiais.
	  salvarAtendimento();
  }
  
  
  // Verificar se o valor que vem do formulário ( Ação ) é igual a "Editar", se for ele executa a função abaixo.   
  if($_GET['acao']=="excluir_material"){

// Chama a Função salvarMateriais() que está dentro da página control/materiais.php e executa o Update no banco de dados, na tabela de Materiais.
	  excluirMaterial();
  }
  
  
  
  
// Pega o ID que veio na URL como GET, executa o código de seleção no banco de dados e mostra os valores na tela com o Fetch Array.  
$sql = mysql_query("select * from tbl_atendimentos where atendimento_id='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
$row = mysql_fetch_array($sql);
 
$sql_material = mysql_query("select * from tbl_atendimentosmatusados where atendimentoMatUsados_atendimento='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
$row_material = mysql_fetch_array($sql_material);  
?>

<div style="margin-left:160px;">
  <form name="form1" method="post" action="index.php?pagina=editarAtendimento">
   <h2>Editar Atendimento</h2>
    <table width="383" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="111">Paciente:</td>
        <td width="252"><select name="atendimento_fkPaciente" id="atendimento_fkPaciente">
          <option value="<? echo $row['atendimento_fkPaciente']; // Mostra as informações da coluna . ?>" selected><? echo getPacientex($row['atendimento_fkPaciente']); // Mostra as informações da coluna . ?></option>
           <option value="" ></option>
		  <? $sql_paciente=mysql_query("Select * from tbl_pacientes order by paciente_nome asc");
					while($row_paciente=mysql_fetch_array($sql_paciente)){ ?>
          
					?>
          <option value="<? echo $row_paciente['paciente_id'];?>" ><? echo $row_paciente['paciente_nome'];?></option>
          <? } ?>
        </select>
          <input name="acao" type="hidden" id="acao" value="editar">
          <input name="id" type="hidden" id="id" value="<? echo $row['atendimento_id']; // Mostra as informações da coluna . ?>"></td>
      </tr>
      <tr>
        <td>Data:</td>
        <td><input type="text" name="atendimento_data" id="atendimento_data" value="<? echo $row['atendimento_data']; // Mostra as informações da coluna na tela. ?>"></td>
      </tr>
      <tr>
        <td>Motivo:</td>
        <td><input type="text" name="atendimento_motivo" id="atendimento_motivo" value="<? echo $row['atendimento_motivo']; // Mostra as informações da coluna na tela. ?>"></td>
      </tr>
      <tr>
        <td>Providencia:</td>
        <td><input type="text" name="atendimento_providencias" id="atendimento_providencias" value="<? echo $row['atendimento_providencias']; // Mostra as informações da coluna na tela. ?>"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Material Utilizado:</td>
        <td><? $sql_produtos=mysql_query("Select * from tbl_atendimentosmatusados mu
	 inner join tbl_materiais m on (mu.atendimentoMatUsados_fkmaterial=m.material_id)
	 where atendimentoMatUsados_atendimento='$row[atendimento_id]'");
		while($row_produtos=mysql_fetch_array($sql_produtos)){ ?>
            <? echo $row_produtos['material_nome'];?> - <? echo $row_produtos['atendimentoMatUsados_quantidade'];?> usados  - <a href="?pagina=editarAtendimento&acao=excluir_material&id_material=<? echo $row_produtos['atendimentoMatUsados_id'];?>&id=<? echo $_GET['id']; ?>">Excluir</a><br />
            <? } ?>        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#F3F3F3"><div align="center">ADICIONAR MAIS MATERIAIS</div></td>
      </tr>
      <tr>
        <td>Material Utilizado:</td>
        <td><select name="material1" id="material1">
            <option value="" selected>Escolha</option>
            <? $sql_material=mysql_query("Select * from tbl_materiais order by material_nome asc");
			 while($row_material=mysql_fetch_array($sql_material)){ ?>
            <option value="<? echo $row_material['material_id'];?>" ><? echo $row_material['material_nome'];?> (<? echo $row_material['material_quantidade'];?>)</option>
            <? } ?>
          </select>
          Qtd :
          <input name="material_utilizado1" type="text" id="material_utilizado1" size="5" maxlength="10"></td>
      </tr>
      <tr>
        <td>Material Utilizado:</td>
        <td><select name="material2" id="material2">
            <option value="" selected>Escolha</option>
            <? $sql_material=mysql_query("Select * from tbl_materiais order by material_nome asc");
			 while($row_material=mysql_fetch_array($sql_material)){ ?>
            <option value="<? echo $row_material['material_id'];?>" ><? echo $row_material['material_nome'];?> (<? echo $row_material['material_quantidade'];?>)</option>
            <? } ?>
          </select>
          Qtd :
          <input name="material_utilizado2" type="text" id="material_utilizado2" size="5" maxlength="10"></td>
      </tr>
      <tr>
        <td>Material Utilizado:</td>
        <td><select name="material3" id="material3">
            <option value="" selected>Escolha</option>
            <? $sql_material=mysql_query("Select * from tbl_materiais order by material_nome asc");
			 while($row_material=mysql_fetch_array($sql_material)){ ?>
            <option value="<? echo $row_material['material_id'];?>" ><? echo $row_material['material_nome'];?> (<? echo $row_material['material_quantidade'];?>)</option>
            <? } ?>
          </select>
          Qtd :
          <input name="material_utilizado3" type="text" id="material_utilizado3" size="5" maxlength="10"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
