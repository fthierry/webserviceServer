<?php
class Library_Core_Service extends Library_Core_Extensions {
    
    public function __construct(){
        
		// Initialisation du user_id en session
        if(empty ($_SESSION['market3w_user_id'])){
            $_SESSION['market3w_user_id'] = -1;
        }
		
		// Ajout des controllers
		$extensions = array ('Application_Controllers_Exemples');
		
		parent::__construct($extensions);
    }
}