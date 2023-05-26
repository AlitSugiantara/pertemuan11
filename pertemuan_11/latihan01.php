<?php
    $dta["NIM"] = "2233445566";
    $dta["NAMA"] = "I Nyoman Alit Sugiantara";
    $dta["JKEL"] = "L";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);