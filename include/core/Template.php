<?php
class Template extends SmartyBC{
        
    public function __construct(){
        parent::__construct();

        $this->assign('_PUBLIC',_PUBLIC);
        $this->assign('URL',URL);

        $this->caching = CACHE_SMARTY;

        
        $this->setTemplateDir('templates/');
        $this->setCompileDir('smarty/templates_c/');
        $this->setConfigDir('smarty/configs/');
        $this->setCacheDir('smarty/cache/');



    }

    protected function imagenBase64($url){
        $path= $url;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        return $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    }

    public function body($archivo,$archivo_idioma = null,$seccion = null) {
        
        $language = null;
        if(isset($_POST['language'])){
            Cookies::setLanguage($_POST['language']);
            $language = $_POST['language'];
        }

        $language = ($language != null) ? $language : Cookies::getLanguage() ;
        $this->configLoad('idioma/'.$language.'.conf','Menu');

        if(!is_null($archivo_idioma)){
            if(!is_null($seccion)){
                $this->configLoad('idioma/'.$archivo_idioma.'-'.$language.'.conf',$seccion);
            }else{
                $this->configLoad('idioma/'.$archivo_idioma.'-'.$language.'.conf');
            }
        }
        

        $this->assign("idioma",$language);

        if (!file_exists($archivo)) {
        	echo "Error al cargar el archivo: ($this->archivo).<br />";
        }else{
            $this->display($archivo); 
        }
        
    }

    
}
?>