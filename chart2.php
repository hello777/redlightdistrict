<?php
	require ('sql_connectchart.php');
	$sql= mysql_query("SELECT * FROM `donate` WHERE 1");
echo ("{\"cols\": [{\"id\":\"\",\"label\":\"\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Framework\",\"pattern\":\"\",\"type\":\"number\"}], \"rows\": [");
	$numResults = mysql_num_rows($sql);
	$counter = 0;
	while($row = mysql_fetch_assoc($sql)) {

//echo $row["id"]; 
//echo $row["amount"];



	//echo("$sql");

  echo("{\"c\":[{\"v\":\"".$row["id"]."\",\"f\":null},{\"v\":".$row ["amount"].",\"f\":null}]}");
  if (++$counter == $numResults)
   { 
   // last row 
   }
    else {
echo(","); 
    // not last row 
    }
    
	}
	echo("]}");



?>