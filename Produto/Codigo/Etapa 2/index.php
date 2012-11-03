<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
  include("control/conexao.php");
?>
<body>

<style>
*{
font-family:"Trebuchet MS";
font-size:12px;

}
</style>

<div style="float:left; width:100px;"><? include("view/menu.php"); ?></div>

<div style="margin-left:30px;">
  <? 
  if($_GET['pagina']=="adicionarHospitais"){
  include("view/adicionarHospital.php");
  }
  elseif($_GET['pagina']=="alterarHospitais"){
   include("view/alterarHospitais.php");
  }
  elseif($_GET['pagina']=="localizarHospitais"){
   include("view/localizarHospitais.php");
  }
  elseif($_GET['pagina']=="excluirHospitais"){
   include("view/excluirHospitais.php");
  }
  elseif($_GET['pagina']=="listarHospitais"){
   include("view/listarHospitais.php");
  }
  elseif($_GET['pagina']=="editarHospitais"){
   include("view/editarHospitais.php");
  }
  
  elseif($_GET['pagina']=="adicionarProfissionais"){
  include("view/adicionarProfissionais.php");
  }
  elseif($_GET['pagina']=="alterarProfissionais"){
   include("view/alterarProfissionais.php");
  }
  elseif($_GET['pagina']=="localizarProfissionais"){
   include("view/localizarProfissionais.php");
  }
  elseif($_GET['pagina']=="excluirProfissionais"){
   include("view/excluirProfissionais.php");
  }
  elseif($_GET['pagina']=="listarProfissionais"){
   include("view/listarProfissionais.php");
  }
  elseif($_GET['pagina']=="editarProfissionais"){
   include("view/editarProfissionais.php");
  }
  
    elseif($_GET['pagina']=="adicionarMateriais"){
  include("view/adicionarMateriais.php");
  }
  elseif($_GET['pagina']=="alterarMateriais"){
   include("view/alterarMateriais.php");
  }
  elseif($_GET['pagina']=="localizarMateriais"){
   include("view/localizarMateriais.php");
  }
  elseif($_GET['pagina']=="excluirMateriais"){
   include("view/excluirMateriais.php");
  }
  elseif($_GET['pagina']=="listarMateriais"){
   include("view/listarMateriais.php");
  }
  elseif($_GET['pagina']=="editarMateriais"){
   include("view/editarMateriais.php");
  }
  
    elseif($_GET['pagina']=="adicionarPacientes"){
   include("view/adicionarPacientes.php");
  }
  
  
   elseif($_GET['pagina']=="adicionarAtendimento"){
  include("view/adicionarAtendimento.php");
  }
  elseif($_GET['pagina']=="alterarAtendimento"){
   include("view/alterarAtendimento.php");
  }
  elseif($_GET['pagina']=="localizarAtendimento"){
   include("view/localizarAtendimento.php");
  }
  elseif($_GET['pagina']=="excluirAtendimento"){
   include("view/excluirAtendimento.php");
  }
  elseif($_GET['pagina']=="listarAtendimento"){
   include("view/listarAtendimento.php");
  }
  elseif($_GET['pagina']=="editarAtendimento"){
   include("view/editarAtendimento.php");
  }
  
  
  
  

   ?>
</div>

</body>
</html>
