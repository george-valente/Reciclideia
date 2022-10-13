<?php
session_start();


if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {

	include('conexao.php');

if (isset($_POST['senha']) && isset($_POST['nova_senha'])
    && isset($_POST['confirma_senha'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$senha = validate($_POST['senha']);
	$nova_senha = validate($_POST['nova_senha']);
	$confirma_senha = validate($_POST['confirma_senha']);
    
    if(empty($senha)){
      header("Location: trocar-senha.php");
	  exit();
    }else if(empty($nova_senha)){
      header("Location: trocar-senha.php");
	  exit();
    }else if($nova_senha !== $confirma_senha){
      header("Location: trocar-senha.php");
	  exit();
    }else {
    	// hashing the password
    	$senha = md5($senha);
    	$nova_senha = md5($nova_senha);
        $id = $_SESSION['id'];

        $sql = "SELECT senha
                FROM login WHERE 
                id='$id' AND senha='$senha'";
        $result = mysqli_query($conexao, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE login
        	          SET senha='$nova_senha'
        	          WHERE id='$id'";
        	mysqli_query($conexao, $sql_2);
        	header("Location: trocar-senha.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: trocar-senha.php?error=Incorrect password");
	        exit();
        }

    }

}else{
	header("Location: trocar-senha.php");
	exit();
}

}else{
	header("Location:index.php");
	exit();
}