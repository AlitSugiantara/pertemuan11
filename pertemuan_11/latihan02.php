<?php
    $dta[0]["NIM"] = "2233445566";
    $dta[0]["NAMA"] = "I Nyoman Alit Sugiantara";
    $dta[0]["JKEL"] = "L";

    $dta[1]["NIM"] = "1234567890";
    $dta[1]["NAMA"] = "Ida Ayu Cok Agung Dewi";
    $dta[1]["JKEL"] = "P";
    
    $dta[2]["NIM"] = "0987654321";
    $dta[2]["NAMA"] = "Komeng Boy";
    $dta[2]["JKEL"] = "L";
    
    $dta[3]["NIM"] = "9876543210";
    $dta[3]["NAMA"] = "Cok Syakira";
    $dta[3]["JKEL"] = "P";
    
    $dta[4]["NIM"] = "0123456789";
    $dta[4]["NAMA"] = "Nancy";
    $dta[4]["JKEL"] = "P";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);