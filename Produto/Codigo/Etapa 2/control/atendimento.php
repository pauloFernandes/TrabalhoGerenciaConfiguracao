<?
require_once("control/conexao.php");

 
//function adicionarHospital($status,$razaoSocial,$cnpj,$endereco,$telefone){

function adicionarAtendimento(){

mysql_query("insert into tbl_atendimentos (atendimento_fkPaciente,atendimento_data, atendimento_motivo, atendimento_providencias
) values ('$_POST[atendimento_fkPaciente]','$_POST[atendimento_data]', '$_POST[atendimento_motivo]', '$_POST[atendimento_providencias]')") or die("Houver algum erro no banco de dados / ".mysql_error());

 $id_atend = mysql_insert_id(); 
 
if($_POST['material_utilizado1']<>""){
mysql_query("insert into tbl_atendimentosmatusados (atendimentoMatUsados_atendimento, atendimentoMatUsados_fkmaterial, atendimentoMatUsados_quantidade
) values ('$id_atend','$_POST[material1]', '$_POST[material_utilizado1]')") or die("Houver algum erro no banco de dados / ".mysql_error());

$sql_materiais1=mysql_query("select * from tbl_materiais where material_id='$_POST[material1]' ") or die("Houver algum erro no banco de dados / ".mysql_error());
$row_materiais1=mysql_fetch_array($sql_materiais1);

$quantidade_nova=$row_materiais1['material_quantidade']-$_POST['material_utilizado1'];

mysql_query("update tbl_materiais set material_quantidade='$quantidade_nova' where material_id='$_POST[material1]' ") or die("Houver algum erro no banco de dados / ".mysql_error());


}

if($_POST['material_utilizado2']<>""){
mysql_query("insert into tbl_atendimentosmatusados (atendimentoMatUsados_atendimento, atendimentoMatUsados_fkmaterial, atendimentoMatUsados_quantidade
) values ('$id_atend','$_POST[material2]', '$_POST[material_utilizado2]')") or die("Houver algum erro no banco de dados / ".mysql_error());

$sql_materiais2=mysql_query("select * from tbl_materiais where material_id='$_POST[material2]' ") or die("Houver algum erro no banco de dados / ".mysql_error());
$row_materiais2=mysql_fetch_array($sql_materiais2);

$quantidade_nova2=$row_materiais2['material_quantidade']-$_POST['material_utilizado2'];

mysql_query("update tbl_materiais set material_quantidade='$quantidade_nova2' where material_id='$_POST[material2]' ") or die("Houver algum erro no banco de dados / ".mysql_error());
}

if($_POST['material_utilizado3']<>""){
mysql_query("insert into tbl_atendimentosmatusados (atendimentoMatUsados_atendimento, atendimentoMatUsados_fkmaterial, atendimentoMatUsados_quantidade
) values ('$id_atend','$_POST[material3]', '$_POST[material_utilizado3]')") or die("Houver algum erro no banco de dados / ".mysql_error());

$sql_materiais3=mysql_query("select * from tbl_materiais where material_id='$_POST[material3]' ") or die("Houver algum erro no banco de dados / ".mysql_error());
$row_materiais3=mysql_fetch_array($sql_materiais3);

$quantidade_nova3=$row_materiais3['material_quantidade']-$_POST['material_utilizado3'];

mysql_query("update tbl_materiais set material_quantidade='$quantidade_nova3' where material_id='$_POST[material3]' ") or die("Houver algum erro no banco de dados / ".mysql_error());
}




echo "Atendimento cadastrado com sucesso!!";


}

function excluirAtendimento(){

mysql_query("delete from tbl_atendimentos where atendimento_id='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
echo "Atendimento deletado com sucesso!!";

}


function excluirMaterial(){

mysql_query("delete from tbl_atendimentosmatusados where atendimentoMatUsados_id='$_GET[id_material]'") or die("Houver algum erro no banco de dados / ".mysql_error());
header("Location: index.php?pagina=editarAtendimento&id=$_GET[id]");

}




function getAtendimento(){

$sql = mysql_query("select * from tbl_atendimentos where atendimento_id='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
$row = mysql_fetch_array($sql);


}



function salvarAtendimento(){

mysql_query("update tbl_atendimentos set atendimento_fkPaciente='$_POST[atendimento_fkPaciente]', atendimento_data='$_POST[atendimento_data]', atendimento_motivo='$_POST[atendimento_motivo]', atendimento_providencias='$_POST[atendimento_providencias]' where atendimento_id='$_POST[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());

$id_atend=$_POST['id'];

if($_POST['material_utilizado1']<>""){
mysql_query("insert into tbl_atendimentosmatusados (atendimentoMatUsados_atendimento, atendimentoMatUsados_fkmaterial, atendimentoMatUsados_quantidade
) values ('$id_atend','$_POST[material1]', '$_POST[material_utilizado1]')") or die("Houver algum erro no banco de dados / ".mysql_error());

$sql_materiais1=mysql_query("select * from tbl_materiais where material_id='$_POST[material1]' ") or die("Houver algum erro no banco de dados / ".mysql_error());
$row_materiais1=mysql_fetch_array($sql_materiais1);

$quantidade_nova=$row_materiais1['material_quantidade']-$_POST['material_utilizado1'];

mysql_query("update tbl_materiais set material_quantidade='$quantidade_nova' where material_id='$_POST[material1]' ") or die("Houver algum erro no banco de dados / ".mysql_error());


}

if($_POST['material_utilizado2']<>""){
mysql_query("insert into tbl_atendimentosmatusados (atendimentoMatUsados_atendimento, atendimentoMatUsados_fkmaterial, atendimentoMatUsados_quantidade
) values ('$id_atend','$_POST[material2]', '$_POST[material_utilizado2]')") or die("Houver algum erro no banco de dados / ".mysql_error());

$sql_materiais2=mysql_query("select * from tbl_materiais where material_id='$_POST[material2]' ") or die("Houver algum erro no banco de dados / ".mysql_error());
$row_materiais2=mysql_fetch_array($sql_materiais2);

$quantidade_nova2=$row_materiais2['material_quantidade']-$_POST['material_utilizado2'];

mysql_query("update tbl_materiais set material_quantidade='$quantidade_nova2' where material_id='$_POST[material2]' ") or die("Houver algum erro no banco de dados / ".mysql_error());
}

if($_POST['material_utilizado3']<>""){
mysql_query("insert into tbl_atendimentosmatusados (atendimentoMatUsados_atendimento, atendimentoMatUsados_fkmaterial, atendimentoMatUsados_quantidade
) values ('$id_atend','$_POST[material3]', '$_POST[material_utilizado3]')") or die("Houver algum erro no banco de dados / ".mysql_error());

$sql_materiais3=mysql_query("select * from tbl_materiais where material_id='$_POST[material3]' ") or die("Houver algum erro no banco de dados / ".mysql_error());
$row_materiais3=mysql_fetch_array($sql_materiais3);

$quantidade_nova3=$row_materiais3['material_quantidade']-$_POST['material_utilizado3'];

mysql_query("update tbl_materiais set material_quantidade='$quantidade_nova3' where material_id='$_POST[material3]' ") or die("Houver algum erro no banco de dados / ".mysql_error());
}


echo "Atendimento editado com sucesso!!";
header("Location: index.php?pagina=listarAtendimento");

}



function getPacientex($id){
$sql = mysql_query("select * from tbl_pacientes where paciente_id='$id'") or die("Houver algum erro no banco de dados / ".mysql_error());
$row = mysql_fetch_array($sql);
return utf8_encode($row['paciente_nome']);	
}


?>