<?
require_once("control/conexao.php");

 
function adicionarPacientes(){


$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
if(!$arquivo){
echo "<script>location.href('error.php?error=Erro! Não acesse esse arquivo diretamente!');</script>" ; 
} else {
 $diretorio = "arquivo.xml";
     if (move_uploaded_file($arquivo['tmp_name'], $diretorio))
    {
	echo "Arquivo importado com sucesso!";
	}
}





//carrega o arquivo XML e retornando um Array do formulário
$xml = simplexml_load_file("arquivo.xml");

//para cada nó Paciente  atribui à variavel $paciente(obj simplexml)
foreach($xml->Item as $paciente)
{ 
        $campo1 = "$paciente->paciente_nome";
        $campo2 = "$paciente->paciente_categoria";
        $campo3 = "$paciente->paciente_datanascimento";
        $campo4 = "$paciente->paciente_cpf";
        $campo5 = "$paciente->paciente_endereco";
        $campo6 = "$paciente->paciente_telefone";     
       
	    $valor = '\''.$campo1.'\',\''.$campo2.'\',\''.$campo3.'\',\''.$campo4.'\',\''.$campo5.'\',\''.$campo6.'\'';
        $inserir = mysql_query("INSERT INTO tbl_pacientes (paciente_nome, paciente_categoria, paciente_datanascimento, paciente_cpf, paciente_endereco, paciente_telefone) VALUES ($valor)") OR die (mysql_error());
		
		

}
echo "<br> Pacientes cadastrados com sucesso!!";





//mysql_query("insert into tbl_pacientes (material_nome, material_data, material_quantidade) values ('$_POST[material_nome]','$_POST[material_data]','$_POST[material_quantidade]')") or die("Houver algum erro no banco de dados / ".mysql_error());



}


//paciente_nome, paciente_categoria, paciente_datanascimento, paciente_cpf, paciente_endereco, paciente_telefone



?>