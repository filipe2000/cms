<?php
class homeController extends controller {
	public function __construct(){
		parent::__construct();
	}

    public function index() {
        $dados = array(
        	'depoimentos'=>array()
        	);
        $depo= new Depoimentos();
        $dados['depoimentos']=$depo->getDepoimentos(2);
        //extract($dados);//feito em teste para transformar em variavel o vetor, para ser identificado no home, mas nao solucionou.
        $this->loadTemplate('home', $dados);//$dados como parâmetro mas não passa daqui, não entendo o relacionamento dos módulos nesse CMS, na aula de MVC entendi mas aqui dificultou, deve explicar o fluxo dos dados e da navegação, ja assisti várias vezes aulas do MVC, Core, Autoload, mas não sei aqui.
    }

}