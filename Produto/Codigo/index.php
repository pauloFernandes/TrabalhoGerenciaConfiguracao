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
  
  
  

   ?>
</div>

</body>
</html>
