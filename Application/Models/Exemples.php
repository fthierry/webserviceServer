<?php
class Application_Models_Exemples extends Library_Core_Model{
    
    protected $table = "exemples";
    protected $table_as = "ex";
    protected $primary = array("exemple_id");


    public function __construct($connexion) {
        parent::__construct($connexion);
    }
}