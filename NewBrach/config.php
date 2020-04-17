<?php
    require_once 'Zend/Loader/Autoloader.php';

    Zend_Loader_Autoloader::getInstance();

	//$config = new Zend_Config_Ini('config.ini', 'testing');
	$config = new Zend_Config_Ini('config.ini', 'production');

	$db = Zend_Db::factory($config->database);
	$db->setFetchMode(Zend_Db::FETCH_OBJ);
	Zend_Db_Table_Abstract::setDefaultAdapter($db);


	//$result = $db->fetchOne("SELECT  newid() as Id");
	//var_dump($result);
/*
	$GLOBALS['MYCODE'] = "BKG";
	$GLOBALS['MYSERVER'] = "1";
	$sql = "SELECT  distinct * from tbCountry  ";
	##die($sql);
	$rs = $db->fetchAll($sql) ;
*/
	$th_email = array(
		'kamonkorn@icstravelgroup.com',
	    'chanakarn@icstravelgroup.com',
	    'worawit.sutsue@icstravelgroup.com',
	    'kittiporn@icstravelgroup.com',
	    'piti@icstravelgroup.com',
	    'nannapat@icstravelgroup.com',
	    'koytip@icstravelgroup.com',
	    'kaewkalaya@icstravelgroup.com',
	    'worawit.siriboon@icstravelgroup.com' ,
	    'chonticha.jaiyen@icstravelgroup.com'
	);

	$indo_email = array(
            'wira@icstravelgroup.com',
            'wulan@icstravelgroup.com' ,
            'maya@icstravelgroup.com',
            'okta@icstravelgroup.com',
            'tangkas@icstravelgroup.com',
            'monika@icstravelgroup.com' ,
            'lussy@icstravelgroup.com' ,
            'peggy@icstravelgroup.com',
            'utami@icstravelgroup.com'
	);

	 $cm_email = array(
	    'gibby@icstravelgroup.com',
	    'naven@icstravelgroup.com',
	    'vanyda@icstravelgroup.com',
	    'channy@icstravelgroup.com',
	    'sreynich@icstravelgroup.com' ,
	    'sreyroath@icstravelgroup.com'
	);

	$vn_email = array( 
            'quenhi@icstravelgroup.com',
            'thi@icstravelgroup.com' ,
            'halan@icstravelgroup.com',
            'ngochieu@icstravelgroup.com' ,
            'minhhao@icstravelgroup.com',
            'songhi@icstravelgroup.com' ,
            'thuyduyen@icstravelgroup.com',
            'binhan@icstravelgroup.com',
            'lien@icstravelgroup.com'  ,
            'kimphu@icstravelgroup.com' ,
            'alice@icstravelgroup.com'
	 );

	$laos_email = array(
	    'toan@icstravelgroup.com' ,
	    'reservations.laos@icstravelgroup.com' ,
	    'ontracting.laos@icstravelgroup.com' ,
	    'somsanith@icstravelgroup.com' ,
	    'aenoy@icstravelgroup.com'
	);

	$mya_email = array(
            'moekyaw@icstravelgroup.com'  
     
	);
?>
