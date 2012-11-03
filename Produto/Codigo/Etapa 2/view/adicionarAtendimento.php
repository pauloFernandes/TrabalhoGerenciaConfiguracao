<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
// Chama a página Materiais que contém todos as funções de Adicionar, Localizar, excluir, Editar das páginas de Materiais
  include("control/atendimento.php");
  
// Verificar se o valor que vem do formulário ( Ação ) é igual a "Adicionar", se for ele executa a função abaixo.
  if($_POST['acao']=="adicionar"){
	
// Chama a Função adicionarAtendimento() que executa o Insert no banco de dados, na tabela de Atendimento
	  adicionarAtendimento();
  }
?>

<div style="margin-left:160px;">
  <form name="form1" method="post" action="index.php?pagina=adicionarAtendimento">
  <h2>Adicionar Atendimento</h2>
    <table width="383" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="111">Paciente:</td>
        <td width="252">
        <select name="atendimento_fkPaciente" id="atendimento_fkPaciente">
      
        <option value="" selected>Escolha</option>
                      <? $sql_paciente=mysql_query("Select * from tbl_pacientes order by paciente_nome asc");
					while($row_paciente=mysql_fetch_array($sql_paciente)){ ?>
					?>
                      <option value="<? echo $row_paciente['paciente_id'];?>" ><? echo $row_paciente['paciente_nome'];?></option>
                      <? } ?>
         </select>
        <input name="acao" type="hidden" id="acao" value="adicionar"></td>
      </tr>
      <tr>
        <td>Data:</td>
        <td><input type="text" name="atendimento_data" id="atendimento_data"></td>
      </tr>
      <tr>
        <td>Motivo:</td>
        <td><input type="text" name="atendimento_motivo" id="atendimento_motivo"></td>
      </tr>
      <tr>
        <td>Providencia:</td>
        <td><input type="text" name="atendimento_providencias" id="atendimento_providencias"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
