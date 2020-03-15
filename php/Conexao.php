<?php 
	
	
	class Conexao{
		private $con;
		public function getCon(){
			return $this->con;
		}
		public function setCon($data){
			$this->con = $data;
		}
		public function __construct(){
			try{
				//Endereço da conexão
				$servidor = "localhost";
				$usuario = "root";
				$senha = "mysqladmin159";
				$banco = "navCode";
				//new PDO("mysql:host=ipServidor;dbname=nomeBanco", quem conecta, senha)
				//         --------------------------------------
				// servidor e nome banco      
				$this->setCon(new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")));
				$this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//erros em exceçoes
				//				   ----------------------------------------
				//setAttribute - pega todas os atributos/metodos da classe PDO
				//ATTR_MODE - 
				//ERRMODE_EXCEPTION-
			}catch(PDOException $ex){
				//mostar os erros na tela (PDOException)
				echo "{$ex->getMessage()}";
			}
		}
	}
 ?>
