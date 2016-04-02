<?php


// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
   CURLOPT_RETURNTRANSFER => 1,
   CURLOPT_URL => 'http://chainz.cryptoid.info/sys/api.dws?q=getbalance&a=SRhwEU1aQk2DPJSC6NTySTdCEtGpS7UF4Y',
   CURLOPT_USERAGENT => 'Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
echo $resp;
// Close request to clear up some resources
curl_close($curl);
?>
