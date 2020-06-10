
<?php

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "pps7594", "pwd" => "{Google7594220}", "Database" => "WebAppDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:tp042049testdb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn){
  die("Error Connect :".sqlsrv_errors();
}
      echo "Good";
?>
