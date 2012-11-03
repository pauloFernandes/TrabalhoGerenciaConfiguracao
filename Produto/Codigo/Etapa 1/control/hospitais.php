<?
require_once("control/conexao.php");

 
//function adicionarHospital($status,$razaoSocial,$cnpj,$endereco,$telefone){

function adicionarHospital(){

mysql_query("insert into tbl_hospitais (status, razao_social, cnpj, endereco, telefone) values ('$_POST[status]','$_POST[razaosocial]','$_POST[cnpj]','$_POST[endereco]','$_POST[telefone]')") or die("Houver algum erro no banco de dados / ".mysql_error());

echo "Hospital cadastrado com sucesso!!";

}


function excluirHospital(){

mysql_query("delete from tbl_hospitais where id_hospitais='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
echo "Hospital deletado com sucesso!!";

}


function getHospital(){

$sql = mysql_query("select * from tbl_hospitais where id_hospitais='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
$row = mysql_fetch_array($sql);


}


function salvarHospital(){

mysql_query("update tbl_hospitais set status='$_POST[status]', razao_social='$_POST[razaosocial]', cnpj='$_POST[cnpj]', endereco='$_POST[endereco]', telefone='$_POST[telefone]'  where id_hospitais='$_POST[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());

echo "Hospital editado com sucesso!!";


}




?>