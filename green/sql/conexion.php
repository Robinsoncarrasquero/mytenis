<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

date_default_timezone_set('America/Caracas');

error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atletasdb";
if (MODO_DE_TEST==0){
    $servername = "localhost";
    $username = "gsscomve_robinad";
    $password = 'RO;bi%ns$on[2889';
    $dbname = "gsscomve_atletasdb";
    error_reporting(0);
}
// if (MODO_DE_TEST==0){
//     $servername = "46.105.189.131";
//     $username = "gsscomve_robinad";
//     $password = 'RO;bi%ns$on[2889';
//     $dbname = "gsscomve_atletasdb";
//     error_reporting(1);
// }

$conn =  mysql_connect($servername, $username, $password);
$result=mysql_select_db($dbname,$conn);
mysql_set_charset("utf8mb4");



?>
