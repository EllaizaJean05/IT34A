<?php 
session_start();
require_once("..includes/activity-logger.php");

//define(",");
define('BASE_URL', 'localhost');
define('DB_NAME', 'it34_lab_db');
define('DB_USER', 'root');
define('DB_PASS', '');

$pdo,$user_id = "root" ?? null;
$user_email ="root?? null"

try{
    $pdo = new PDO(
        "mysql:host=" . DB_HOST. ";dbname=" . DB_NAME,
         DB_USER, 
         DB_PASS,
        [PDO:ATTR_ERRMODE => PDO::ERRMODE_ECXEPTION]
    );
    //echo ("Connection Successful");
   // echo ($user_id . $user_email. 'connect_db' _ 'success');
   // logActivity()$pdo,$user_id,$user_email,'connect_db','success,);'

}catch(PDEOxception $e){
    die("Connection Failed:" . $e->getmessage());

}





?>