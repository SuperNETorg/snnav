<?php


// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
   CURLOPT_RETURNTRANSFER => 1,
   CURLOPT_SSL_VERIFYPEER => false,
   CURLOPT_URL => 'https://www.blockexperts.com/api?coin=btcd&action=getbalance&address=RA7FDvaNFXZNLqosSbCWFbypuvijJNQw5J',
   CURLOPT_USERAGENT => 'Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
echo $resp;
// Close request to clear up some resources
curl_close($curl);
?>
 