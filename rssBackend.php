<?php

$session = curl_init($_GET['url']); 	               // Open the Curl session
curl_setopt($session, CURLOPT_HEADER, false); 	       // Don't return HTTP headers
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);   // Do return the contents of the call
$xml = curl_exec($session); 	                       // Make the call
header("Content-Type: text/xml"); 	               // Set the content type appropriately
echo $xml; 	      // Spit out the xml
curl_close($session); // And close the session


?>
