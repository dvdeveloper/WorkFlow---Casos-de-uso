<?php
	class Generate extends Template{

		function __construct(){
			parent::__construct();
		}

		function index(){
			if($_POST){
				$json = json_decode($_POST['data'],true);
				$this->assign("imagen",$json['imagen']);
				$this->assign("data",json_decode($json['json'],true));

				$this->body("views/generate/index.tpl");
			}
		}

		function file(){
			if($_POST){
				header("Content-type: text/plain");
   				header("Content-Disposition: attachment; filename=export-dv-usecase.json");
				$json = $_POST['data'];
				echo $json;
			}
		}

		function png(){
			if($_POST){
				$this->assign("imagen",$_POST['data']);
				$this->body("views/generate/imagen.tpl");
			}
		}
	}
?>