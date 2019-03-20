<?php
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 0); // 0 = Unlimited

// ini_set("memory_limit", "-1");
set_time_limit(0);
chmod ("pesquisa.php", 777);

$str = file_get_contents('fpf.json');
$decode = json_decode( $str, TRUE );


/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=atletasnow_fut;host=atletasnow_fut.mysql.dbaas.com.br';
$user = 'atletasnow_fut';
$password = 'atletasnow@123';

try {
    $dbh = new PDO($dsn, $user, $password);

    echo 'conectado';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}



	function convertDate($date){
		return str_replace('/', '-', $date);
	}

	// print_r($decode);


	// exit;
foreach ( $decode as $key => $valor){


	// print_r($key);

	// echo '<hr>';
	// print_r($valor['id_federacao']);

	// break;

// print_r($key['jogos_disputados']);


	// echo date("Y-m-d",strtotime(convertDate($valor['inicio_contrato'])));

	// break;
	// echo date("Y/m/d",strtotime($valor['data_nascimento']));

	// echo date("Y-m-d", strtotime($valor['data_nascimento']));

 
    // echo $valor['inicio_contrato'];

    // print_r($valor['jogos_disputados']);


	try {
	  
	  /*`id` int NOT NULL AUTO_INCREMENT,
	`id_federacao` int NOT NULL UNIQUE,
	`nome_completo` varchar(255) NOT NULL,
	`apelido` varchar(255) NOT NULL,
	`clube_atual` varchar(255) NOT NULL,
	`inicio_contrato` DATE NOT NULL,
	`fim_contrato` DATE NOT NULL,
	`foto` varchar(255) NOT NULL,
	`data_nascimento` DATE NOT NULL,
	`nacionalidade` varchar (255) NOT NULL,*/
	  $stmt = $dbh->prepare('INSERT INTO atletasnow_futeb (id_federacao, nome_completo, apelido, clube_atual, inicio_contrato, fim_contrato, foto, data_nascimento, nacionalidade) VALUES(:id_federacao, :nome_completo, :apelido, :clube_atual, :inicio_contrato, :fim_contrato, :foto, :data_nascimento, :nacionalidade)');


	  $stmt->execute(array(
	    ':id_federacao' => $valor['id_federacao'],
	    ':nome_completo' => $valor['nome_completo'],
	    ':apelido' => $valor['apelido'],
	    ':clube_atual' => $valor['clube_atual'],
	    ':inicio_contrato' => date("Y-m-d",strtotime(convertDate($valor['inicio_contrato']))),
	    ':fim_contrato' => date("Y-m-d",strtotime(convertDate($valor['fim_contrato']))),
	    ':foto' => $valor['foto'],
	    ':data_nascimento' => date("Y-m-d",strtotime(convertDate($valor['data_nascimento']))),
	    ':nacionalidade' => $valor['nacionalidade'],

	  ));

	   
	  // echo $stmt->rowCount().' Inserido com sucesso '.$valor['id_federacao'].' Tabela atletasnow_futebol'; 

	  /*INSERCAO DOS JOGOS*/


	  // print_r($valor['jogos_disputados']);

	  $id = $valor['id_federacao'];

	  // break;
	  foreach ($valor['jogos_disputados'] as $key => $value) {
	# code...

			// print_r($key);
			

			// echo $id;

			// break;

			try {

			  		$stmt2 = $dbh->prepare('INSERT INTO jogos_disp (tipo_jogo, jogos_disputados, gols_marcados, ano, id_federacao) VALUES(:tipo_jogo, :jogos_disputados, :gols_marcados, :ano, :id_federacao)');

			  		// print_r($key);
			  		 $stmt2->execute(array(
				    ':tipo_jogo' => $key,
				    ':jogos_disputados' => $value['jogos_disputados'],
				    ':gols_marcados' => $value['gols_marcados'],
				    ':ano' => $value['ano'],
				    ':id_federacao' => $id,

				  ));
	  		
	  		} catch(PDOException $e) {
			  echo 'Error: ' . $e->getMessage();
			    // break;

			}
		}

	  	
	  	// break;



	  

	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	    // break;

	}



	break;


}


echo 'Importacao realizada com sucesso';