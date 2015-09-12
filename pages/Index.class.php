<?php
	class Index extends Template{

		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->body("views/index/index.tpl","index","Index");
		}

	}
?>