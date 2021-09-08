<?php
$tns = " 
(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = xe)
    )
  )
       ";
$db_username = "system";
$db_password = "oracle";
try{
    $conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
    
}catch(PDOException $e){
    echo ($e->getMessage());
}


?>