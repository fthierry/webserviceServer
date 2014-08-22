<?php
class Application_Configs_Settings{
    public function __construct() {
		define("API_ROOT", str_replace("index.php", "", "http://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']));
        
        define("DB_HOST",   "localhost");
        define("DB_NAME",   "db_name");
        define("DB_USER",   "db_user");
        define("DB_PASS",   "db_pass");
        define("DB_CHARSET","utf8");
        
        define("SALT_USER_PWD", '=+/e-Kue/vW--y?cj:,54rsfgh:lm&d5eE>tl#rmzh./M+Jz47a,sz>BARyXrRXZ4P~%');
    }
}