<?php

namespace Nane;

   abstract class GenericSingleton {
      protected static $oInstance = array();
      // En mettant le constructeur en visibilité PROTECTED 
      // on s'assure que nous ne pourrons pas instancier
      // cette classe depuis l'extérieur mais on l’autorise
      // pour la classe enfant.
      protected function __construct() {}
      // on empeche aussi le clonage.
   private function __clone() {}

   public static function getInstance() {
       $class = get_called_class();
       if (! array_key_exists($class, self::$oInstance)) {
           self::$oInstance[$class] = new $class();
       }
       return self::$oInstance[$class];
   }
}
