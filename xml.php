<?php
$payload = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <ListOfLanguagesByName xmlns="http://www.oorsprong.org/websamples.countryinfo">
    </ListOfLanguagesByName>
  </soap:Body>
</soap:Envelope>';
$URL = "http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso";

$request = curl_init($URL);
curl_setopt($request, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($request, CURLOPT_POST, 1);
curl_setopt($request, CURLOPT_POSTFIELDS, "$payload");
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($request);
curl_close($request);


echo "<pre>";
print_r($output);
?>
