<?php

$host="localhost";
$user = "root";
$senha= "";
$BD = "missformiga";


$conn = mysqli_connect($host, $user, $senha, $BD);

if($conn){
	//Conexão realizada";
}else{
	//echo "Conexão não realizada";
}

?>