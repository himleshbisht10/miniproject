<?php
session_start();

   $host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dcjrfn9ert59om";
   $credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   $db = pg_connect( "$host $port $dbname $credentials"  );

   /* Create a query statement */
   $qry = pg_query("SELECT * FROM logind WHERE email = '$_POST[email]'");
    
   while ($row = pg_fetch_assoc($qry)) {
  echo $row['password']; $res= $row['password'];
   }

      $res= implode(" ",$res);

    if($row > 0)
    { echo"no"; echo $res;  include_once("dashboard.php"); }
    else 
    {  echo "yes "; echo $res;  include_once("dashboard.php"); } 

$_SESSION['email']= $_POST[email];

pg_close($db);
?>
   
