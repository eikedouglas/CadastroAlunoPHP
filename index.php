<?php
	include_once "conecta.php";
	conecta();
	
	if($_POST != null){
		
		$nomealuno = $_POST["nomeAluno"];
		$email = $_POST["email"];
		$matricula = $_POST["matricula"];
		$cpf = $_POST["cpf"];
		$curso = $_POST["curso"];
		$campus = $_POST["campus"];		
		$logradouro = $_POST["logradouro"];
		$numero = $_POST["numero"];
		$bairro = $_POST["bairro"];
		$cidade = $_POST["cidade"];
		$estado = $_POST["estado"];
		$pais = $_POST["pais"];
			
		if($nomealuno == "" ||  $email == "" ||  $matricula == "" ||  $cpf == "" || $curso == "" ||  $campus == "" ||
		$logradouro == "" || $numero == "" || $bairro == "" || $cidade == "" || $estado == "" || $pais == "")
		{
			echo "<script>alert('Favor preencher todos os campos!')</script>";

		}else{
			$sqlAluno = mysql_query("INSERT INTO aluno(idaluno, nome, email, matricula, cpf,
			curso, campus)VALUES(null, '$nomealuno', '$email', '$matricula', '$cpf', '$curso', '$campus')");
			$alunoId = mysql_insert_id();
			$sqlEndereco = mysql_query("INSERT INTO endereco(idendereco, logradouro, numero, bairro, cidade, estado, pais, aluno_idaluno)
			VALUES(null, '$logradouro', '$numero', '$bairro', '$cidade', '$estado', '$pais', '$alunoId')");
			
			if($sqlAluno && $sqlEndereco){
				echo "<script>alert('Aluno cadastrado com sucesso!')</script>";
			}else{
				echo "<script>alert('Erro ao enviar.')</script>";
			}
		}	
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Cadastro de Aluno</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
		<button type="button" class="btn btn-default navbar-btn">Sign in</button>
		<a class="navbar-brand" href="#">
        <img alt="Cadastro" src="...">
      </a>
    </div>
  </div>
</nav>

<form class="form-horizontal" name="f_cad" method="POST">

<div class="container"> 
  <div class="form-group">
    <label for="inputNome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-7">
      <input type="text" name="nomeAluno" id="nomeAluno" class="form-control" placeholder="Nome">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-7">
      <input type="email" name="email" id="email" class="form-control" placeholder="Email">
    </div>
  </div>  

  <div class="form-group">
    <label for="inputMatricula" class="col-sm-2 control-label">Matrícula</label>
    <div class="col-sm-3">
      <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Matrícula">
    </div>
  </div>   

  <div class="form-group">
    <label for="inputCPF" class="col-sm-2 control-label">CPF</label>
    <div class="col-sm-3">
      <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF">
    </div>
  </div>  

  <div class="form-group">
    <label for="inputCurso" class="col-sm-2 control-label">Curso</label>
    <div class="col-sm-7">
      <input type="text" name="curso" id="curso" class="form-control" placeholder="Curso">
    </div>
  </div>  

  <div class="form-group">
    <label for="input" class="col-sm-2 control-label">Campus</label>
    <div class="col-sm-7">
      <input type="text" name="campus" id="campus" class="form-control" placeholder="Campus">
    </div>
  </div>

  <div class="form-group">
    <label for="inputCEP" class="col-sm-2 control-label">DIGITE O CEP:</label>
    <div class="col-sm-3">
      <input type="text" name="cep" id="cep" class="form-control" placeholder="CEP">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputLogradouro" class="col-sm-2 control-label">Logradouro</label>
    <div class="col-sm-7">
      <input type="text" name="logradouro" id="logradouro" class="form-control" placeholder="Avenida, Rua, Praça">
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputNumero" class="col-sm-2 control-label">Número</label>
    <div class="col-sm-1">
      <input type="text" name="numero" id="numero" class="form-control" placeholder="Ex.:54">
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputbairro" class="col-sm-2 control-label">Bairro</label>
    <div class="col-sm-6">
      <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro">
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputCidade" class="col-sm-2 control-label">Cidade</label>
    <div class="col-sm-6">
      <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade">
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputEstado" class="col-sm-2 control-label">Estado</label>
    <div class="col-sm-6">
      <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado">
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputPais" class="col-sm-2 control-label">Pais</label>
    <div class="col-sm-6">
      <input type="text" name="pais" id="pais" class="form-control" placeholder="Pais">
    </div>
  </div>
  
  
</div>
 
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
	  <button type="reset" class="btn btn-default">Limpar</button>
    </div>
  </div>

</form>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>