<?php

/**
define('SMARTY_DIR', '/usr/local/lib/Smarty-3.1.14/libs/');
define ('APP_DIR', '/Applications/MAMP/htdocs/phpClient/');


require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
$smarty->testInstall();

  print "Hello Samuel...";
  
 $smarty->setTemplateDir( APP_DIR . 'templates/');
$smarty->setCompileDir(APP_DIR . 'templates_c/');
$smarty->setConfigDir(APP_DIR . 'configs/');
$smarty->setCacheDir( APP_DIR .'cache/');
 
 $smarty->assign('name','Ned');
 //$smarty->debugging = true;
 $smarty->display('index.tpl');
 
 
 
 
 //var_dump($test);
 echo "<br />";
 **/
 $test = array('first'=> 'samuel','last' => 'maura','code' => '1122', 'user' => 'elegy' );
 header('Content-Type: application/json');
 echo "run_json(".json_encode($test) . ")";
 
 
?>