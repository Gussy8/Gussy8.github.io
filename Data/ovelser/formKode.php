<?php
include_once "form.html";
if(isset($_REQUEST["tal1"])&&isset($_REQUEST["tal2"])){
    $num1=$_REQUEST["tal1"];
    $num2=$_REQUEST["tal2"];
    echo $num1+$num2;

}

function regn($a,$b){
    $res=$a+$b;
    echo $res;
}
?>