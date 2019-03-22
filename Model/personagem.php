<?php
	
	class Personagem{
		
		public $nomeDeGuerra;
		public $palavraMagina;
		public $nome;
		public $raca;
		public $classe;

		function Personagem($nomeDeGuerra,$palavraMagina,$nome,$raca,$classe){
			this->$nomeDeGuerra = $nomeDeGuerra;
			this->$palavraMagina = $palavraMagina;
			this->$nome = $nome;
			this->$raca = $raca;
			this->$classe = $classe;
		}

		function Personagem(){

		}

	}

?>