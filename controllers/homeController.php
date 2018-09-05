<?php
class homeController extends Controller {
	public function __contruct(){
		parent::__contruct();
	}

    public function index() {
        $data = array();


        $this->loadTemplate('home', $data);
    }

}