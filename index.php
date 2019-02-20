<!DOCTYPE html>
<html>
<head>
	<title>Primeira Aula de PHP</title>
</head>
<body>

<?php
		//comandos de saida

		/*echo "Primeira aula de php<br>";

		print("Hello word <br>");

		$vetor  = array('Palio', 'gol', 'fiesta', 'corsa'<br>);
		var_dump($vetor);

		$vetor  = array('Palio', 'gol', 'fiesta', 'corsa');
		print_r($vetor);
		*/

		//$nome = "Maria";
		//$sobrenome = "Santos";
		//echo "$nome, $sobrenome";

		//dicas da variavel do prof André
		/*Nunca faça isso
		Nunca inicie variavel com numeros
		Nao de espaco entre as variaveis
		Nao use caracteres especiais ! @ # % & () * ¨¨
		Nao crie  variaveis com mais de 15 caracteres
		Use palavras em minusculo
		Em variaveis compostas use a primeira letra da segunda palavra em minusculo ex: codPagro
		ou use um underline ( _ ) para separar as palavras ex: cod_pack
		*/		

		/*$a = 10;
		$b = a;
		$b = 5;
		echo "$a <br>";
		echo "$b";

		$a = 10;
		$b =&10a;
		$b = 5;*/

		#Variaveis boolean
		/*$exibir_nome = true;

		if($exibir_nome){
			echo "Josisvaldo Pereira";
		}*/

		/*$umidade = 91;

		$vai_chover = ($umidade > 90);

		if ($vai_chover) {
			echo "Esta chovendo";
		}
		else{
			echo "Nao esta chovendo";
		}*/

		#variavel do tipo numerica

		$a = 124;
		$a = -124; 
		$a = 0124; #octagonal
		$a = 0x2a; #hexadecimal
		$a = 1.24;
		$a = 4e12; #notificacao cientifica

		#Variaveis do tipo string
		$variavel = 'Isso e um teste'; 
		$variavel = "Isso e um teste";
		#aspas simples para declarar um valor para variavel
		#para texto uso de aspas duplas
		//A crieterio do programador


		#Variaveis do tipo arrays(vetores)

		$carros = $arrayName = array('palio', 'filder', 'lamborguine');
		print_r($carros);
		//var_dump($carros);
		echo $carros [1];

		#variaveis do tipo objeto

		/**
		 * 
		 */
		class Computador
		{
			
			var $cpu;

			function ligar()
			{
				echo "<br>Ligando o computador a {$this ->cpu}...";
			}
		}

		$obj = new Computador;
		$obj -> cpu = "500 mhz";
		$obj -> ligar();
?>

</body>
</html>