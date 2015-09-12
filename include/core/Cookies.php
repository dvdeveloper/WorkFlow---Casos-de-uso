<?php
class Cookies{
    
    static $idiomas         = array('es','en');
    static $default_idioma  = 'en';
    
    function __construct(){ }

    public static function getLanguage(){
        if(!isset($_COOKIE['language'])){
            self::setCookiesLanguage(self::$default_idioma);
            $language = self::$default_idioma;
        }else if(in_array($_COOKIE['language'], self::$idiomas)){
            $language = $_COOKIE['language'];
        }else{
            self::setCookiesLanguage(self::$default_idioma);
            $language = self::$default_idioma;
        }
        return $language;
    }

    public static function setLanguage($language){
        if(in_array($language, self::$idiomas)){
            self::setCookiesLanguage($language);
        }
    }

    public static function setCookiesLanguage($language){
        setcookie('language',$language, time() + 365 * 24 * 60 * 60); 
    }

}