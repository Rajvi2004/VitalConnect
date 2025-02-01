<?php
   // Database connection details
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "vitalReg";

   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);

   // Check connection
   if ($conn) 
   {
       echo "Connectio ok okkkkkkkk ";
   }
   else
   {
       echo "Connection is not okk".mysqli_connect_error();
   }
?>