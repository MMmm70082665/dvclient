<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/workspace/downloadvar/app/config/databases.xml
// Generated by: AgaviDatabaseConfigHandler
// Date: 2013-07-08T06:43:21+0000

$database = new AgaviPdoDatabase();
$this->databases['pdo_mysql_main'] = $database;
$database->initialize($this, array (
  'dsn' => 'mysql:host=localhost;dbname=downloa3_downloadvar',
  'username' => 'downloa3_downloa3',
  'password' => '70082665',
));
$database = new AgaviPropelDatabase();
$this->databases['propelom'] = $database;
$database->initialize($this, array (
  'config' => 'C:\\workspace\\downloadvar\\app/config/downloadvar-conf.php',
));
$this->defaultDatabaseName = 'propelom';

?>