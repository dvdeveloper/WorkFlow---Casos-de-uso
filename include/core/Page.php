<?php
	class Page{

		function __construct(){
			self::init();
		}

		private function init(){
            $url = self::htaccess();
            if(empty($url[0])){
                    $url[0] = 'Index';
            }
            self::crearPagina($url);
		}

		private function crearPagina($url){
			$url[0] = ucwords(strtolower($url[0]));
			$archivo = "pages/".$url[0].".class.php";
			if(file_exists($archivo)){

				include $archivo;
				$clase = new $url[0];

				if(empty($url[1])){ //index de la página
					$clase->index();
				}else{
					
					$count = count($url);
					switch ($count) {
						
						case 6:
							if(self::validarMetodo($clase,$url[1])){
								$clase->$url[1]($url[2],$url[3],$url[4],$url[5]);
							}
						break;

						case 5:
							if(self::validarMetodo($clase,$url[1])){
								$clase->$url[1]($url[2],$url[3],$url[4]);
							}
						break;

						case 4:
							if(self::validarMetodo($clase,$url[1])){
								$clase->$url[1]($url[2],$url[3]);
							}
						break;

						case 3:
							if(self::validarMetodo($clase,$url[1])){
								$clase->$url[1]($url[2]);
							}
						break;

						case 2:
							if(self::validarMetodo($clase,$url[1])){
								$clase->$url[1]();
							}
						break;
						
					}
				}

			}else{
				include "pages/Error.class.php";
				$error = new Error();
				$error->index("404");
			}
		}

		private function validarMetodo($clase,$metodo){
			if(method_exists($clase,$metodo)){
				return true;
			}else{
				header('Location: '.URL);
			}
		}

		private function htaccess(){
			$url = isset($_GET['p']) ? $_GET['p'] : null;
			$url = rtrim($url, '/');
			$url = explode('/', $url);
			return $url;
		}
	}
?>