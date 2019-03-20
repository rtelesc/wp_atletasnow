<?php
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 0); // 0 = Unlimited

// ini_set("memory_limit", "-1");
set_time_limit(0);
// chmod ("pesquisa.php", 777);



// echo $_GET['email'];


/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=atletasnow_fut;host=atletasnow_fut.mysql.dbaas.com.br';
$user = 'atletasnow_fut';
$password = 'atletasnow@123';

try {
    $dbh = new PDO($dsn, $user, $password);

    // echo 'conectado';
} catch (PDOException $e) {

	/*INSERIR MENSAGEM DE ERRO*/
    // echo 'Connection failed: ' . $e->getMessage();
}



/*FUNCAO PARA PESQUISAR NO BANCO DE DADOS DE ACORDO COM O NOME DO JOGADOR E RETORNAR */

	
	$bsc = $_POST['nome'];

//	$bsc = "aaa";




	$localizar = $dbh->prepare('SELECT * FROM futebol WHERE nome_completo LIKE :pesquisa');
	$localizar->bindValue(':pesquisa', '%'.$bsc.'%');
	// $localizar->bindValue(':limiter', 1);
	$localizar->execute();
	

	$user = $localizar->fetchObject();

	// print_r($user);

//print_r($user);

	echo json_encode($user);


	// echo $user->nome_completo;



