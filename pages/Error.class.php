<?php
	class Error Extends Template{

		function index($error){
			$this->assign("error",$error);
			$this->body('views/error/index.tpl');
		}
	}
?>