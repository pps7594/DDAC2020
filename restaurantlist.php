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

<html>
<head>
<title>List of KL Restaurant</title>
</head>
<body>
<center>
<h1>List of KL Restaurant</h1>
<!--create table structure using HTML first-->
<table border="1">
<tr>
<th>Restaurant ID</th>
<th>Restaurant Name</th>
<th>Address</th>
<th>Phone</th>
</tr>
<tr>
<th>0</th>
<th>Subway Restaurant</th>
<th>Menara Standard Chartered, TPM</th>
<th>03-22441234</th>
</tr>
</table>
</center>
</body>
</html>
