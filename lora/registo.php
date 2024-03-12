<?php
// http://vianaconnect.alunos.esmonserrate.org/app/registo.php?loraid=1&lat=42.1234567&long=-8.1234567

if (isset($_REQUEST["loraid"]) && isset($_REQUEST["lat"]) && isset($_REQUEST["long"])){
    echo "O gajo com a lora",$_REQUEST["loraid"], " está lat: ", $_REQUEST["lat"] , " e log: ", $_REQUEST["long"];
    require "../ligacao.php";



}