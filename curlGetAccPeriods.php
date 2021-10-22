<?php

function getPeriods($url, $username, $password)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => $url . '/fscmRestApi/resources/11.13.18.05/accountingPeriodsLOV',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/vnd.oracle.adf.resourcecollection+json',
        'Authorization: Basic ' . base64_encode($username . ':' . $password)
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
