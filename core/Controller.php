<?php
class Controller {

	private $config;

	public function __construct(){		
		$cfg= new Config();
		$this->config= $cfg->getConfig();//recebe dados da tabela config, todos controllers herdam
		
	}

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
									//'site-template=>default'
		include 'views/templates/'.$this->config['site_template'].'.php';
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}
	public function loadMenu(){
		$menu= new Menu();
		$m=array();
		$m['menu']=$menu->getMenu();
		//carregar a view so com menu
		$this->loadView('menu',$m);
	}

}