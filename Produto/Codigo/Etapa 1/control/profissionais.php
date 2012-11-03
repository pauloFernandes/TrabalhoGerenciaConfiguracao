<?
require_once("control/conexao.php");

 
//function adicionarHospital($status,$razaoSocial,$cnpj,$endereco,$telefone){

function adicionarProfissionais(){

mysql_query("insert into tbl_profissionais (nome, cpf, cargo, horario) values ('$_POST[nome]','$_POST[cpf]','$_POST[cargo]','$_POST[horario]')") or die("Houver algum erro no banco de dados / ".mysql_error());

echo "Profissional cadastrado com sucesso!!";

}


function excluirProfissionais(){

mysql_query("delete from tbl_profissionais where id_profissionais='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
echo "Profissional deletado com sucesso!!";

}


function getProfissionais(){

$sql = mysql_query("select * from tbl_profissionais where id_profissionais='$_GET[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());
$row = mysql_fetch_array($sql);


}


function salvarProfissionais(){

mysql_query("update tbl_profissionais set nome='$_POST[nome]', cpf='$_POST[cpf]', cargo='$_POST[cargo]', horario='$_POST[horario]'  where id_profissionais='$_POST[id]'") or die("Houver algum erro no banco de dados / ".mysql_error());

echo "Profissional editado com sucesso!!";


}




?>