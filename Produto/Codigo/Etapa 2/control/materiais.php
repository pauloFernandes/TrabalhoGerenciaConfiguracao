<?
require_once("control/conexao.php");

 
//function adicionarHospital($status,$razaoSocial,$cnpj,$endereco,$telefone){

function adicionarMateriais(){

mysql_query("insert into tbl_materiais (material_nome, material_data, material_quantidade) values ('$_POST[material_nome]','$_POST[material_data]','$_POST[material_quantidade]')") or die("Houver algum erro no banco de dados / ".mysql_error());

echo "Material cadastrado com sucesso!!";

}


function excluirMateriais(){

mysql_query("delete from tbl_materiais where material_id='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
echo "Material deletado com sucesso!!";

}


function getMateriais(){

$sql = mysql_query("select * from tbl_materiais where material_id='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
$row = mysql_fetch_array($sql);


}


function salvarMateriais(){

mysql_query("update tbl_materiais set material_nome='$_POST[material_nome]', material_data='$_POST[material_data]', material_quantidade='$_POST[material_quantidade]'  where material_id='$_POST[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());

echo "Material editado com sucesso!!";


}




?>